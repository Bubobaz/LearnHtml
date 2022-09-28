$("form").submit(function(e) {
    e.preventDefault()
    const form = $(this),
          data = form.serialize(),
          result = $('#result')
    
    $.ajax({
        method: "POST",
        url: form.attr('action'),
        data: data, 
        success: function(data)
        {
            result.html(data)
            result.show()
            $('button').attr("disabled", true)
        }
    })
})