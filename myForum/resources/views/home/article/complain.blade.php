<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>前台 | 举报</title>
</head>
<body>
<form action="/home/docomplain" method="post">
    {{ csrf_field() }}
    <div style="margin:0 auto">
        <table border="1" align="center" width="500" height="200" bgcolor="#e0ffff ">
            <tr>
                <th colspan="2" align="left">举报:</th>
            </tr>
            <tr>
                <td align="center">举报对象:  </td>
                <td>作者1(之后加)</td>
            </tr>
            <tr>
                <td rowspan="3" align="center" >举报类型</td>
                <td>涉黄<input type="radio" name="cmpl_type" value="涉黄"></td>
            </tr>
            <tr>
                <td>诈骗<input type="radio" name="cmpl_type" value="诈骗"></td>
            </tr>
            <tr>
                <td>其他<input type="radio" name="cmpl_type" value="其他"></td>
            </tr>
            <tr>
                <td colspan="2" align="center" ><input type="submit" value="确定"></td>
            </tr>
        </table>
    </div>
</form>

</body>
</html>