<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CustomMailer;
use Illuminate\Support\Facades\Mail;



class OrderController extends Controller
{
    protected $mailer;


    public function __construct(CustomMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function order(Request $request){
        
        
        $academicId = $request->get('academic_level');
        $documentId = $request->get('paper_type');
        $subjectId = $request->get('subject_id');
        $topic = $request->get('topic');
        $instructions = $request->get('instructions');
        $englishType = $request->get('english_type');
        $styleId = $request->get('style_id');
        $discountAmount = $request->get('discount_amount');
        $discountId = $request->get('discount_id');
        $file = $request->file('file');
        $urgencyId = $request->get('urgency_id');
        $pages = $request->get('pages');
        $spacing = $request->get('spacing');
        $sources = $request->get('sources');
        $charts = $request->get('charts');
        $slides = $request->get('slides');
        $writerCategoryId = $request->get('writer_category_id');
        $featureIds = $request->get('feature_ids', []);
        $phone= $request->get('phone');
        $email= $request->get('email');
        



        $data = [
            'academic_id' => "Masters",
            'document_id' => $documentId,
            'subject_id' => $subjectId,
            'topic' => $topic,
            'instructions' => $instructions,
            'english_type' => $englishType,
            'style_id' => $styleId,
            'discount_amount' => $discountAmount,
            'discount_id' => $discountId,
            'urgency_id' => $urgencyId,
            'pages' => $pages,
            'spacing' => $spacing,
            'sources' => $sources,
            'charts' => $charts,
            'slides' => $slides,
            'writer_category_id' => $writerCategoryId,
            'feature_ids' => $featureIds,
            'phone'=> $phone,
            'email'=> $email


            //add email
        ];
//calculate the price

        $total_Price=$this->totalPrice($pages,$charts,$slides,$urgencyId);
        




        //send to the student
            $to = $email;
            $subject = 'New Order Details';
            $htmlContent = $this->generateOrderEmailContent($data, $total_Price);
            $this->mailer->sendEmail($to, $subject, $htmlContent);
        //send to the site admin
        $to = "Mastersassignmenth@gmail.com";
        $subject = 'New Order Details';
        $htmlContent = $this->generateOrderEmailContent($data,$total_Price);
        $this->mailer->sendEmail($to, $subject, $htmlContent);
      
        
        echo '<div id="paypal-button-container"></div>';
        echo '<p id="result-message"></p>';
        echo '<script src="https://www.paypal.com/sdk/js?client-id=test&buyer-country=US&currency=USD&components=buttons&enable-funding=venmo" data-sdk-integration-source="developer-studio"></script>';
        echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                paypal.Buttons({
                    createOrder: function(data, actions) {
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: '{$total_Price}' ,
                                    payee: {
                            email_address: 'Topessaytutors@gmail.com' 
                        }
                                }
                            }]
                        });
                    },
                    onApprove: function(data, actions) {
                        return actions.order.capture().then(function(details) {
                            alert('Transaction completed by ' + details.payer.name.given_name);
                            document.getElementById('result-message').innerText = 'Transaction completed by ' + details.payer.name.given_name;
                        });
                    }
                }).render('#paypal-button-container'); // Display payment button on your web page
            });
        </script>";


        




    }
    private function generateOrderEmailContent($data,$price) {
        $htmlContent = '
        <html>
        <head>
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 10px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }
                th {
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>
            <h2>New Order Details</h2>
            <table>
                <tr>
                    <th>Academic Level</th>
                    <td>' . htmlspecialchars($data['academic_id']) . '</td>
                </tr>
                <tr>
                    <th>Paper Type</th>
                    <td>' . htmlspecialchars($data['document_id']) . '</td>
                </tr>
                <tr>
                    <th>Subject ID</th>
                    <td>' . htmlspecialchars($data['subject_id']) . '</td>
                </tr>
                <tr>
                    <th>Topic</th>
                    <td>' . htmlspecialchars($data['topic']) . '</td>
                </tr>
                <tr>
                    <th>Instructions</th>
                    <td>' . nl2br(htmlspecialchars($data['instructions'])) . '</td>
                </tr>
                <tr>
                    <th>English Type</th>
                    <td>' . htmlspecialchars($data['english_type']) . '</td>
                </tr>
                <tr>
                    <th>Style ID</th>
                    <td>' . htmlspecialchars($data['style_id']) . '</td>
                </tr>
                <tr>
                    <th>Discount Amount</th>
                    <td>' . htmlspecialchars($data['discount_amount']) . '</td>
                </tr>
                <tr>
                    <th>Discount ID</th>
                    <td>' . htmlspecialchars($data['discount_id']) . '</td>
                </tr>
                <tr>
                    <th>Urgency ID</th>
                    <td>' . htmlspecialchars($data['urgency_id']) . '</td>
                </tr>
                <tr>
                    <th>Pages</th>
                    <td>' . htmlspecialchars($data['pages']) . '</td>
                </tr>
                <tr>
                    <th>Spacing</th>
                    <td>' . htmlspecialchars($data['spacing']) . '</td>
                </tr>
                <tr>
                    <th>Sources</th>
                    <td>' . htmlspecialchars($data['sources']) . '</td>
                </tr>
                <tr>
                    <th>Charts</th>
                    <td>' . htmlspecialchars($data['charts']) . '</td>
                </tr>
                <tr>
                    <th>Slides</th>
                    <td>' . htmlspecialchars($data['slides']) . '</td>
                </tr>
                <tr>
                    <th>Writer Category ID</th>
                    <td>' . htmlspecialchars($data['writer_category_id']) . '</td>
                </tr>
                <tr>
                    <th>Feature IDs</th>
                    <td>' . implode(', ', array_map('htmlspecialchars', $data['feature_ids'])) . '</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>' . htmlspecialchars($data['phone']) . '</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>' . htmlspecialchars($data['email']) . '</td>
                </tr>
                <tr>
                    <th>Total Price</th>
                    <td>' . htmlspecialchars('$'.$price) . '</td>
                </tr>
            </table>
        </body>
        </html>';
        
        return $htmlContent;
    }
   
    private function totalPrice($page,$charts,$slide,$urgency){
        $total_price=0;
        
        if ($page>0){
        $total_price=$page * 15;

        }

        if ($charts>0){
            $total_price+=$charts*3;
        }
        if ($slide>0){
            $total_price+=$slide*6;
        }

        if ($urgency == "24 Hours") {
            $total_price += 7;
        } 
        elseif ($urgency == "10 Days") {
            $total_price += 10;
        } 
        else {
            // Check if the urgency is over 1 day
    
                $total_price += 1;
            }

return $total_price;


}



}
