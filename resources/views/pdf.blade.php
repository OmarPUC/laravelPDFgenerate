<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>Show Name</b></td>
        <td><b>Series</b></td>
        <td><b>Lead Actor</b></td>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$show->show_name}}
        </td>
        <td>
          {{$show->series}}
        </td>
        <td>
          {{$show->lead_actor}}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>
