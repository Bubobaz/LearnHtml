$("form").submit(function(e) {
    e.preventDefault()
    const form = $(this),
          data = form.serialize(),
          development = $('#development').is(':checked'),
          design = $('#design').is(':checked'),
          analysis =$('#analysis').is(':checked')

    $.ajax({
        method: "POST",
        url: form.attr('action'),
        data: data,development,design,analysis, 
        success: function(data)
        {
            alert(data)
            $('button').attr("disabled", true)
        }
    });
});