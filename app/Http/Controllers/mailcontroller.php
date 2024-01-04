<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class mailcontroller extends Controller
{
    //
    public function mail(Request $request)
    {

        $name = $request->input('name');
        // $email = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('products');
        $comments = $request->input('comments');




            $mail = new PHPMailer(true);

            try {


                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'kiransk417417@gmail.com';
                $mail->Password = 'coscrdwtzhywplhu';
                      // $mail->Username = 'saitechnosolutionscbe@gmail.com';
                // $mail->Password = 'lwysjixcfqanrtgr';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->setFrom('kiran915959@gmail.com', 'Home Grow');
                $mail->addAddress('support@homegrow.co.in');
                $mail->isHTML(true);

                $mail->Subject = "Home Grow - Enquiry";

                $mail->Body    = "<html>
                <head>
                <title>Home Grow  Enquiry</title>
                </head>
                <body>
                <h2>Hello Sir / Madam</h2>
                <p style='font-size:14px;'>Kindly find below the  Enquiry from
                </p>
                <h4 style='background-color:#e0e0eb;padding: 5px;'>Home Grow  Enquiry:</h4>
                <table style='border:2px solid;width:50%;border-collapse: collapse;'>
                <tr>
                <td style='border:1px solid;padding: 10px;text-align: left;'><h4> Name</h4></td>
                <td style='font-size:16px;border:1px solid;padding: 10px;text-align: left;'>".$name."</td>
                </tr>
                <tr>
                <td style='border:1px solid;padding: 10px;text-align: left;'><h4>Phone Number</h4></td>
                <td style='font-size:16px;border:1px solid;padding: 10px;text-align: left;'>".$phone."</td>
                </tr>
                <tr>
                <td style='border:1px solid;padding: 10px;text-align: left;'><h4>Subject</h4></td>
                <td style='font-size:16px;border:1px solid;padding: 10px;text-align: left;'>".$subject."</td>
                </tr>
                <tr>
                <td style='border:1px solid;padding: 10px;text-align: left;'><h4>Message</h4></td>
                <td style='font-size:16px;border:1px solid;padding: 10px;text-align: left;'>".$comments."</td>
                </tr>


                </table>

                 <h5 style='padding-top: 5px;font-size:14px;' >Best regards,</h5>
                 <h5 style='padding-top: 2px;font-size:14px;'>Home Grow  Support Team</h5>

                </body>
                </html>";


                // $mail->AltBody = plain text version of email body;

                if( !$mail->send() ) {
                    return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
                }
                else {
                    return back()->with("success", "Enquiry Submitted Successfully.");
                }

            } catch (Exception $e) {

                //  return back()->with('error','Message could not be sent.');
            }


    return redirect('/')->with('success', 'Enquiry Submitted Successfully');
}
}