<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ServicePackage;
use App\Models\StudioRoom;
use App\Exports\BookingsExport;
use App\Exports\ServicePackagesExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReportController extends Controller
{
    // Booking Management
    public function bookingIndex()
    {
        $bookings = Booking::with(['user', 'studioRoom'])->paginate(10);
        return view('bookings.index', compact('bookings'));
    }

    public function bookingExportExcel()
    {
        $bookings = Booking::with(['user', 'studioRoom'])->get();
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Laporan Booking');
        
        // Headers
        $headers = ['ID', 'Pelanggan', 'Ruang Studio', 'Tanggal Booking', 'Jam Mulai', 'Jam Selesai', 'Status', 'Harga Total'];
        $sheet->fromArray($headers, NULL, 'A1');
        
        // Style headers
        $headerStyle = $sheet->getStyle('A1:H1');
        $headerStyle->getFont()->setBold(true);
        $headerStyle->getFill()->setFillType('solid')->getStartColor()->setRGB('4472C4');
        $headerStyle->getFont()->getColor()->setRGB('FFFFFF');
        
        // Data
        $row = 2;
        foreach ($bookings as $booking) {
            $sheet->setCellValue('A' . $row, $booking->id);
            $sheet->setCellValue('B' . $row, $booking->user->name);
            $sheet->setCellValue('C' . $row, $booking->studioRoom->name);
            $sheet->setCellValue('D' . $row, $booking->booking_date->format('d-m-Y'));
            $sheet->setCellValue('E' . $row, $booking->start_time);
            $sheet->setCellValue('F' . $row, $booking->end_time);
            $sheet->setCellValue('G' . $row, ucfirst($booking->status));
            $sheet->setCellValue('H' . $row, number_format($booking->total_price, 0, ',', '.'));
            $row++;
        }
        
        // Auto size columns
        foreach (range('A', 'H') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        // Create Excel file
        $writer = new Xlsx($spreadsheet);
        $filename = 'Laporan_Booking_Studio_' . date('d-m-Y') . '.xlsx';
        
        ob_start();
        $writer->save('php://output');
        $content = ob_get_clean();
        
        return response($content, 200)
            ->header('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
            ->header('Content-Disposition', "attachment; filename=$filename");
    }

    public function bookingExportPdf()
    {
        $bookings = Booking::with(['user', 'studioRoom'])->get();
        $pdf = Pdf::loadView('bookings.pdf', compact('bookings'));
        return $pdf->download('Laporan_Booking_Studio_' . date('d-m-Y') . '.pdf');
    }

    // Service Package Management
    public function packageIndex()
    {
        $packages = ServicePackage::paginate(10);
        return view('packages.index', compact('packages'));
    }

    public function packageExportExcel()
    {
        $packages = ServicePackage::all();
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Laporan Paket Layanan');
        
        // Headers
        $headers = ['ID', 'Nama Paket', 'Deskripsi', 'Harga', 'Durasi (jam)', 'Includes'];
        $sheet->fromArray($headers, NULL, 'A1');
        
        // Style headers
        $headerStyle = $sheet->getStyle('A1:F1');
        $headerStyle->getFont()->setBold(true);
        $headerStyle->getFill()->setFillType('solid')->getStartColor()->setRGB('4472C4');
        $headerStyle->getFont()->getColor()->setRGB('FFFFFF');
        
        // Data
        $row = 2;
        foreach ($packages as $package) {
            $sheet->setCellValue('A' . $row, $package->id);
            $sheet->setCellValue('B' . $row, $package->name);
            $sheet->setCellValue('C' . $row, $package->description);
            $sheet->setCellValue('D' . $row, number_format($package->price, 0, ',', '.'));
            $sheet->setCellValue('E' . $row, $package->duration_hours);
            $sheet->setCellValue('F' . $row, $package->includes);
            $row++;
        }
        
        // Auto size columns
        foreach (range('A', 'F') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        // Create Excel file
        $writer = new Xlsx($spreadsheet);
        $filename = 'Laporan_Paket_Layanan_' . date('d-m-Y') . '.xlsx';
        
        ob_start();
        $writer->save('php://output');
        $content = ob_get_clean();
        
        return response($content, 200)
            ->header('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
            ->header('Content-Disposition', "attachment; filename=$filename");
    }

    public function packageExportPdf()
    {
        $packages = ServicePackage::all();
        $pdf = Pdf::loadView('packages.pdf', compact('packages'));
        return $pdf->download('Laporan_Paket_Layanan_' . date('d-m-Y') . '.pdf');
    }

    // Studio Rooms Management
    public function roomIndex()
    {
        $rooms = StudioRoom::paginate(10);
        return view('rooms.index', compact('rooms'));
    }

    public function roomExportPdf()
    {
        $rooms = StudioRoom::all();
        $pdf = Pdf::loadView('rooms.pdf', compact('rooms'));
        return $pdf->download('Daftar_Ruang_Studio_' . date('d-m-Y') . '.pdf');
    }
}
