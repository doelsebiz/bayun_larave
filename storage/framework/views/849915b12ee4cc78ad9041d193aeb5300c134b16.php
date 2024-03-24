<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form Email Template</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; font-size: 14px; line-height: 1.5; background-color: #f9f9f9;">
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
    <tr>
      <td align="center" bgcolor="#f9f9f9" style="padding: 20px 0;">
        <table border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
          <tr>
            <td align="center" bgcolor="#ffffff" style="padding: 40px 0 30px 0; border-radius: 5px;">
               <img src="http://bayungroup.com/public/assets/images/logo.png" alt="Company Logo" style="display: block; width: 150px;">
              <h2 style="margin: 0; color: #333333;">Contact Form</h2>
            </td>
          </tr>
          <tr>
            <td bgcolor="#ffffff" style="padding: 20px; border-radius: 5px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                <tr>
                  <td width="30%" style="font-weight: bold; padding-bottom: 10px;">Name:</td>
                  <td width="70%" style="padding-bottom: 10px;"><?php echo e($request->name); ?></td>
                </tr>
                <tr>
                  <td width="30%" style="font-weight: bold; padding-bottom: 10px;">Email:</td>
                  <td width="70%" style="padding-bottom: 10px;"><?php echo e($request->email); ?></td>
                </tr>
                <tr>
                  <td width="30%" style="font-weight: bold; padding-bottom: 10px;">Subject:</td>
                  <td width="70%" style="padding-bottom: 10px;"><?php echo e($request->subject); ?></td>
                </tr>
                <tr>
                  <td width="30%" style="font-weight: bold; padding-bottom: 10px;">Message:</td>
                  <td width="70%" style="padding-bottom: 10px;"><?php echo e($request->message); ?></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
<?php /**PATH D:\xamp\htdocs\bayun_laravel\resources\views/email/quoteemail.blade.php ENDPATH**/ ?>