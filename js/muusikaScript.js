$(document).ready(function() {

    function updateCheckboxes() {
        let valik = $("input[name='valik']:checked").map(function(){ return $(this).val(); }).get();
        $("#vastus1").text(valik.length ? "Sa valisid: " + valik.join(", ") : "");
    }

    function updateArvamus() {
        $("#vastus2").text($("#arvate").val());
    }

    function updateSlider() {
        $("#vastus3").text("Sa kuulad muusikat " + $("#slider").val() + " tundi pأ¤evas");
    }

    function updateRadio() {
        let val = $("input[name='sugu']:checked").val();
        $("#vastus4").text(val ? val : "");
    }

    function updateJaamad() {
        $("#vastus5").text($("#grupp").val());
    }

    function updateStiil() {
        let val = $("input[name='stiil']:checked").val();
        $("#vastus6").text(val ? "Sa kأµige rohkem kuulad: " + val : "");
    }


    $("input[name='valik']").change(updateCheckboxes);
    $("#arvate").on('input', updateArvamus);
    $("#slider").on('input change', updateSlider);
    $("input[name='sugu']").change(updateRadio);
    $("#grupp").on('input', updateJaamad);
    $("input[name='stiil']").change(updateStiil);


    $("#submitBtn").click(function() {
        let valid = true;
        $(".error").text("");

        if ($("input[name='valik']:checked").length === 0) {
            $("#errorAnsambleid").text("Palun vali vأ¤hemalt أ¼ks ansambel!");
            valid = false;
        }
        if ($("#arvate").val().trim() === "") {
            $("#errorArvamus").text("Palun kirjuta oma arvamus!");
            valid = false;
        }
        if (!$("input[name='sugu']:checked").val()) {
            $("#errorRaadio").text("Palun vali raadio kuulamise variant!");
            valid = false;
        }
        if ($("#grupp").val().trim() === "") {
            $("#errorJaamad").text("Palun kirjuta vأ¤hemalt أ¼ks raadiojaam!");
            valid = false;
        }
        if (!$("input[name='stiil']:checked").val()) {
            $("#errorStiil").text("Palun vali muusika stiil!");
            valid = false;
        }

        if (!valid) return;


        let kokku = "<h3>Kokkuvأµte sinu vastustest</h3>";
        kokku += "<p><b>Ansamblid:</b> " + $("input[name='valik']:checked").map(function(){ return $(this).val(); }).get().join(", ") + "</p>";
        kokku += "<p><b>Arvamus:</b> " + $("#arvate").val() + "</p>";
        kokku += "<p><b>Tunnid:</b> " + $("#slider").val() + "</p>";
        kokku += "<p><b>Raadio:</b> " + $("input[name='sugu']:checked").val() + "</p>";
        kokku += "<p><b>Jaamad:</b> " + $("#grupp").val() + "</p>";
        kokku += "<p><b>Muusikastiil:</b> " + $("input[name='stiil']:checked").val() + "</p>";

        $("#kokkuvote").html(kokku);
    });


    $("#Puhasta").click(function() {
        $("#regform")[0].reset();
        $(".result-block").text("");
        $(".error").text("");
        $("#slider").val(0);
    });

});