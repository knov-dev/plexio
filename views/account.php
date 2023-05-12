<?php
session_start();
$id = $_SESSION['userid'];
require "../db/connections.php";
include "modules/header.php";
include "modules/navbar.php";


$user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE userid=".$id));

include "modules/acc_form.php";
include "modules/admin_panel_profiles.php";




?>




    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <script>
        // Render the PayPal button
        paypal.Button.render({
            // Set your environment
            env: 'sandbox', // sandbox | production

            // Specify the style of the button
            style: {
                layout: 'vertical', // horizontal | vertical
                size: 'medium', // medium | large | responsive
                shape: 'rect', // pill | rect
                color: 'gold' // gold | blue | silver | white | black
            },

            funding: {
                allowed: [],
                disallowed: [paypal.FUNDING.CARD, paypal.FUNDING.CREDIT ]
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // PayPal Client IDs - replace with your own
            client: {
                sandbox: 'AeXPp4oR_gW7rzSQOUri6RLBqyGdmQ6aj8wNk3vJTKCnm--ltRD-2ybEw5U2V75UgeXygVismrZ5zcHo',
                production: ''
            },

            payment: function (data, actions) {
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: {
                                    total: '99.99',
                                    currency: 'GBP'
                                }
                            }
                        ]
                    }
                });
            },

            onAuthorize: function (data, actions) {
                return actions.payment.execute()
                    .then(function () {
                        window.alert('Payment Complete!');
                        window.location.href ="/plexio/controller/manage_user.php?sub=1";
                    });
            }

        }, '#paypal-button-container');
    </script>

<?php

include "modules/footer.php";