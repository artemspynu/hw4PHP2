<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View</title>
</head>
<body>
<div class="container">
    <div class="items__inner">
        <?= drowItems(0) ?>
    </div>
    <div class="button" data-event="1">Показать ещё</div>
</div>
<script>

    $('.button').on('click', function () {
        let counter = $(this).data('event');
        $(this).data('event', counter + 1);
        $.ajax({
            url: "ajax.php",
            type: "POST",
            dataType: "html",
            data: {
                "min": counter
            },
            success: function (html) {
                console.log(this.data);
                $('.items__inner').append(html);
            }
        });
    });
</script>
</body>
</html>