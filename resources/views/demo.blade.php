<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite('resources/css/app.css') --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    .showless {

        height: 70px;
        overflow: hidden;
    }
</style>

<body>
    {{-- <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
    </ul>
    <h1 id="hello">
        <div class="d1"></div>
    </h1>
    <h1 id="welcome" style="width: 300px;background-color: rebeccapurple">مرحبا</h1>
    <h1 id="ramadan">رمضان</h1>
    <input id="test" type="text" value="تجربة">
    <input id="myinput" class="btn btn-info" type="submit" value="اخفاء">
    <input id="myinput2" class="btn btn-danger" type="submit" value="عرض"> --}}

    <div class="card" style="width: 18rem;">
        <img src="{{ asset('images/ramadan.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text showless">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officia
                labore
                architecto quidem? Corrupti vel perspiciatis soluta tenetur odit assumenda possimus delectus dignissimos
                facere similique enim omnis atque, temporibus fugiat.</p>
            <a href="#" class="btn btn-primary" id="test">المزيد</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
       // $("#myinput").click(function(){
    
    
    // });
    //    $("#myinput2").click(function(){
    
    
    // $('#test').attr("type","password")
    
    
    // });
        // $('#welcome').mouseover(function(){
        // $('#welcome').css({backgroundColor:"#ff00ff"})
        // })

       // $('#welcome').mouseleave(function(){
    // $('#welcome').css({backgroundColor:"#00ff00"})
    // })
    //hide()
    //show()
    //fadeIn()
    //fadeOut()
    //fadeToggle()
    //show()
    //slideUp()
    //slideDown()
    //slideToggle()
    //append()
    //before()
    //after()
    //click()
    //mouseover()
    //mouseleave()
    //mouseenter()
        $(document).keypress(function (event) {
            let key = event.which;
            let character = String.fromCharCode(key);
            alert('assci code : '+ key);
            alert('You pressed key : '+ character);
        });
   
    
    $('a').click(function(){
        $('p').toggleClass('showless');
        var isfound = $('p').hasClass("showless");
        //alert(isfound);
       if(isfound === true){
            $('#test').text("المزيد");
            $('#test').addClass("btn-primary");
            $('#test').removeClass("btn-danger");
       }else{
        $('#test').text("عناصر اقل");
        $('#test').addClass("btn-danger");
        $('#test').removeClass("btn-primary");
       }
    })
    
     })





    </script>
</body>


</html>