<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class CarteController extends Controller
{
        //
        //
        public function Addtopdf()
        {

            // Now let's understand

            // To use Fpdi, we required to declare path in header of file.

            // create pdf by declare pdf variable
            $pdf = new Fpdi();


            // To add a page
            $pdf->AddPage();

            // to set font. This is compulsory
            $pdf->SetFont('helvetica','','14');

            // set the source file
            // Below is the path of pdf in which you going to print details.
            //  Right now i had blank pdf
            $path = public_path("white.pdf");

            // Set path
            $pdf->setSourceFile($path);

            // import page 1
            // define page number
            // if you want to print detail in page to you have to write 2 instead of 1.
            // right now we have only one page pdf.

            $tplId = $pdf->importPage(1);
            // use the imported page and place it at point 10,10 with a width of 100 mm
            $pdf->useTemplate($tplId, null, null, null, 210, true);

            // Now this details we are going to print in pdf.
            // Horizontal and veritcal setXY


            $pdf->SetXY(130, 79);
            // Details you want to print

            // Now let's change details an position
            $pdf->Write(0.2,": 10 0007 708 T");

        // let's bring another below it

            // Second details
            $pdf->SetXY(107, 91);
            $pdf->Write(0.1,"KOUASSI ");


            // Second details
            $pdf->SetXY(107, 110);
            $pdf->Write(0.1,"KOUAME JEAN ");

            // Second details
            $pdf->SetXY(107, 130);
            $pdf->Write(0.1,"05/02/2000 ");

            // Second details
            $pdf->SetXY(107, 150);
            $pdf->Write(0.1,"YAKRO ");

            // Second details
            $pdf->SetXY(246, 105);
            $pdf->Write(0.1," M ");

            // Second details
            $pdf->SetXY(109, 170);
            $pdf->Write(0.1,"Licence ");

            //
            $pdf->Image('image.jpg',15,65,80);


            /*
            $pdf->SetXY(40, 60);
            $pdf->Write(0.1,"les tests pour générer des pdf");
            */

            // Now this showing as preview in browser
            // This is output
            // let's check now by running project. But before that we have to add Route.

            // Because I is for preview for browser.
            $pdf->Output('I',"Demotest.pdf");

    }

}
