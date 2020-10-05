<!DOCTYPE html>
<html>
  <head>
  
  </head>
  <body>
    <h1>test</h1>
    <script>
      console.log("Timezone: " + Intl.DateTimeFormat().resolvedOptions().timeZone);
      var clientTimezoneOffset = new Date();
      console.log("Timezone Hours: " + clientTimezoneOffset);
    </script>
  </body>
</html>
