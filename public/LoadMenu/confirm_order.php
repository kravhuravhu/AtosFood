<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '../vendor/autoload.php';
    
    function sendOrderConfirmation($orderID, $customerName, $customerEmail, $cartItems, $totalPrice) {
        $message = '';
    
        if (!empty($orderID)) {
            try {
                $mail = new PHPMailer(true);
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'arrithnius@gmail.com';
                $mail->Password = 'cjze kduk jxup ehlv';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
    
                $mail->setFrom('no_reply@atosfood.net', 'ATOSFOOD');
                $mail->addAddress($customerEmail);
    
                $mail->isHTML(true);
                $mail->Subject = 'ORDER CONFIRMATION - #' . $orderID;
    
                // Start the table and add the headers
                $cartItemsTable = '
                    <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;border-color: gray; border-style: solid">
                        <thead style="color: white;background-color: #6db9d5;">
                            <tr>
                                <th style="width: 50px;">Image</th>
                                <th style="width: fit-content;">Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>';
    
                        // Base URL for the images
                        $baseURL = 'https://github.com/arrithniusjr/AtosFood/raw/main/';

                        // Loop through cart items and add rows to the table
                        foreach ($cartItems as $item) {
                            $itemTotalPrice = $item['price'] * $item['quantity'];
                            
                            // Replace spaces with %20 to ensure correct URL encoding
                            $imageFilename = htmlspecialchars($item['image']);
                            $imageURL = $baseURL . str_replace(' ', '%20', $imageFilename);
                            
                            $cartItemsTable .= '
                                <tr>
                                    <td><img src="' . $imageURL . '" alt="' . htmlspecialchars($item['name']) . '" style="width: 50px; height: auto;"></td>
                                    <td>' . htmlspecialchars($item['name']) . '</td>
                                    <td>' . htmlspecialchars($item['quantity']) . '</td>
                                    <td>R' . number_format($item['price'], 2) . '</td>
                                    <td>R' . number_format($itemTotalPrice, 2) . '</td>
                                </tr>';
                        }


                        // Close the table
                        $cartItemsTable .= '
                        </tbody>
                    </table>';
    
                // Build the email body with the table included
                $mail->Body = '
                    <p>Hello ' . htmlspecialchars($customerName) . ',</p>
                    <p>Your order has been received. <strong>Order Number:</strong> ' . htmlspecialchars($orderID) . '</p>
                    <p>Here is a summary of your order:</p>' .
                    $cartItemsTable .
                    '<p><strong>Total Amount:</strong> R' . number_format($totalPrice, 2) . '</p>
                    <p>We will notify you once your order is ready to be delivered.</p>
                    <p>Thank you for shopping with us!</p>';
    
                $mail->AltBody = 'Hello ' . htmlspecialchars($customerName) . ', Your order has been received. Order Number: ' . htmlspecialchars($orderID) . '. Total Amount: R' . number_format($totalPrice, 2) . '.';
    
                $mail->send();
                $message = "Mail has been sent successfully!";
            } catch (Exception $e) {
                $message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $message = "Order number is missing. Email not sent.";
        }
    
        return $message;
    }
    
    
?>
