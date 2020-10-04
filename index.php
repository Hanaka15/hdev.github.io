<!DOCTYPE html>
<html>
  <head>
  
  </head>
  <body>
    <script>
      console.log("Timezone: " + Intl.DateTimeFormat().resolvedOptions().timeZone);
      var clientTimezoneOffset = new Date();
      console.log("Timezone Hours: " + clientTimezoneOffset);
    </script>
  </body>
</html>
