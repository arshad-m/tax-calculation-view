// calculate standard deduction on income from rent on change
$(document).on("keyup", "#income_from_rent", function(){
  var income = $("#income_from_rent").val();
  $("#standard_deduction").val((30/100)*parseFloat(income));
});

// ajax call on button click to submit form data to laravel contoller
$(document).on("click", "#submit", function() {
    
    $.ajax({
        url: $(this).attr('load-url'),
        method: 'post',
        dataType: "json",
        data: $("#calculate_tax").serializeArray(),
        success: function(result) {
            if (result) {
                // update the tax related fileds with response values
                Object.entries(result.details).forEach(([key, value]) => {
                    if(key != 'total_deduction' || key != 'gross_total_income'){
                    $("#"+key).text(value);
                    }
                })

                // update gross total income fields
                Object.entries(result.details.gross_total_income).forEach(([key, value]) => {
                    if(key != 'inf'){
                    if(key == 'sum') key = 'gti_sum';
                    $("#"+key).text(value.toFixed(2));
                    }
                })

                // update deduction fields
                Object.entries(result.details.total_deduction).forEach(([key, value]) => {
                    if(key != '80c'){
                    if(key == 'sum') key = 'td_sum';
                    $("#"+key).text(value.toFixed(2));
                    }else{
                    $("#80c_total").text(value.total.toFixed(2));
                    $("#80c_min_value").text(value.min_value.toFixed(2));
                    }
                })

                if($("#standard_deduction").val() == ''){
                    var income = $("#income_from_rent").val();
                    $("#standard_deduction").val((30/100)*parseFloat(income));
                }

                alert(result.message);
            } else {
                alert('Opps...!!!')
            }
        }
    });
})