<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(FCPATH.'vendor/autoload.php');

class Export extends CI_Controller {

    public function index() {
        try {
            $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
            $fontDirs = $defaultConfig['fontDir'];

            $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
            $fontData = $defaultFontConfig['fontdata'];


            $mpdf = new \Mpdf\Mpdf(
                [
                'tempDir' => FCPATH . '/application/pdf',
                'fontDir' => array_merge($fontDirs, [
                    FCPATH . '/font',
                ]),
                'fontdata' => $fontData + [
                    'kanit' => [
                        'R' => 'Kanit/Kanit-Regular.ttf',
                        'I' => 'Kanit/Kanit-Italic.ttf'
                    ]
                ],
                'default_font' => 'kanit'
                // 'default_font' => 'Garuda'
                ]
            );

            $subject = 'ลืมรหัสผ่าน';

            $data = [
                'subject' => $subject,
                'content' => 'คุณกำลังประสบปัญหา จำรหัสผ่านไม่ได้ใช่ไหม ถ้าใช้ คลิ๊กที่ข้างล่าง',
                'token_url' => 'account/forgotActivated?token=',
                'token' => 'ssssssssssssssss',
                'link_text' => 'คลิ๊กที่นี่เพื่อเปลี่ยนรหัสผ่านใหม่',
                'view' => 'mail_response_1',
                'frontend_base_url' => 'https://scgb2b.dockeruat.23perspective.com/',
                'base_url' => 'http://tutorial.local/',
                'expire_date' => date('Y-m-d')
            ];

            // $mpdf->SetColumns(2, 'J', 3);
            $stylesheet = file_get_contents(FCPATH.'frontend/stylesheet.css'); // external css
            $mpdf->WriteHTML($stylesheet,1);
            $header = $this->load->view('hello_world',$data,TRUE);
            $content = $this->load->view('content',$data,TRUE);
            // $html = ob_get_contents();
            $mpdf->WriteHTML($header,2);
            $mpdf->WriteHTML($content,3);
            // $mpdf->AddColumn();
            $mpdf->Output();
        } catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
            // Process the exception, log, print etc.
            echo $e->getMessage();
        }

    }

    public function ex() {
        try {
            $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
            $fontDirs = $defaultConfig['fontDir'];

            $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
            $fontData = $defaultFontConfig['fontdata'];


            $mpdf = new \Mpdf\Mpdf(
                [
                'tempDir' => FCPATH . '/application/pdf',
                'fontDir' => array_merge($fontDirs, [
                    FCPATH . '/font',
                ]),
                'fontdata' => $fontData + [
                    'kanit' => [
                        'R' => 'Kanit/Kanit-Regular.ttf',
                        'I' => 'Kanit/Kanit-Italic.ttf'
                    ]
                ],
                'default_font' => 'kanit'
                // 'default_font' => 'Garuda'
                ]
            );


            $mpdf->SetDisplayMode('fullwidth');
            $stylesheet = file_get_contents(FCPATH.'frontend/stylesheet2.css'); // external css
            $mpdf->WriteHTML($stylesheet,1);
            $header = $this->load->view('layout',$data,TRUE);
            $mpdf->WriteHTML($header,2);

            $mpdf->Output();
        } catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
            // Process the exception, log, print etc.
            echo $e->getMessage();
        }

    }


}
