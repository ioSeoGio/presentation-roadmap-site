window.onload = function(){
    (function(){
        let vote = +$("#vote").val();
        if(vote)
        {
            $('.star').css("cursor", "default");

            $(".vote").attr("data-active", "1");

            $(".return-vote").show();

            for(let i = 0; i < vote; i++)
            {
                if(!$(`.star:eq(${i})`).attr("src").includes("star-active"))
                    $(`.star:eq(${i})`).attr("src", $(`.star:eq(${i})`).attr("src").replace("star", "star-active"))
            }
        }
    })();
}

var counter = 1;

$('body').on('click', '.nav', function(){

    let side = +$(this).attr("data-side") ? "left" : "right";

    switch (side) {
        case "right":
            counter++;
            if(counter > 3)
            {
                counter = 1;
            }

            showImage(counter)
            showHelper(counter)
            break;
        case "left":
            counter--;
            if(counter < 1)
            {
                counter = 3;
            }

            showImage(counter)
            showHelper(counter)
            break;
    }

    function showImage(i)
    {
        $('.image').each((idx, item) => {
            if(i === +$(item).attr("data-id"))
                $(item).css("display", "flex");
            else
                $(item).css("display", "none");
        })
    }

    function showHelper(i)
    {
        $('.helpers').each((idx, item) => {
            if(i === +$(item).attr("data-helper"))
                $(item).removeClass("helper-none");
            else
                $(item).addClass("helper-none");
        })
    }
});

$('.star').hover(function(){
    if(!+$(".vote").attr("data-active")){
        let num = +$(this).attr("data-id");

        for(let i = 0; i < num; i++)
        {
            if(!$(`.star:eq(${i})`).attr("src").includes("star-active"))
                $(`.star:eq(${i})`).attr("src", $(`.star:eq(${i})`).attr("src").replace("star", "star-active"))
        }
    }

}, function(){
    if(!+$(".vote").attr("data-active")){
        $('.star').each((idx, item) => {
            $(item).attr("src", $(this).attr("src").replace("star-active", "star") )
        })
    }
})


$('body').on('click', '.star', function(){

    let num = +$(this).attr("data-id");

    $.ajax({
        type: 'GET',
        url: $(location).attr('href').slice(0, $(location).attr('href').lastIndexOf('/')) + '/test',
        // data: {
        //   id: id
        // },
        success: function(res){
            $('.star').css("cursor", "default");

            $(".vote").attr("data-active", "1");

            $(".return-vote").show();
        },
        error: function(){
            alert("error");
        }
    });

});


$('body').on('click', '.return-vote', function(){

    $('.star').css("cursor", "pointer");

    $(".vote").attr("data-active", "0");

    $(this).hide();

    for(let i = 0; i < $(`.star`).length; i++)
    {
        if($(`.star:eq(${i})`).attr("src").includes("star-active"))
            $(`.star:eq(${i})`).attr("src", $(`.star:eq(${i})`).attr("src").replace("star-active", "star"))
    }


    // $.ajax({
    //     type: 'GET',
    //     url: $(location).attr('href').slice(0, $(location).attr('href').lastIndexOf('/')) + '/test',
    //     // data: {
    //     //   id: id
    //     // },
    //     success: function(res){
    //         $('.star').css("cursor", "default");
    //
    //         $(".vote").attr("data-active", "1");
    //
    //         $(".return-vote").show();
    //     },
    //     error: function(){
    //         alert("error");
    //     }
    // });

});
