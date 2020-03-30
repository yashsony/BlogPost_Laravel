$(document).ready(function()
{
    
    $("#search").focus(function()
    {
        $(this).css("box-shadow","0px 0px 6px #03ff7f");
       
    }
    );

    $("#search").blur(function()
    {
        $(this).css("box-shadow","0px 0px 0px #03ff7f");
    }
    );

    $("#sbText").mouseenter(function()
    {
        a = $("#sText1").css("font-size");
        b = (parseInt(a));
        c = b + 10;
        //$("#sText1").css("font-size",c);
      //  $("#sText1").css("-webkit-transform","scale(1.3)");
        $("#sText1,#sText2").addClass("zoom");
        $("#sText1,#sText2").css("transition","all 0.3s ease-in-out");                  
        $("#sellimg1").css("height","220px","width","230"); 
        $("#sellimg1").css("transition","height 0.3s ease-in-out");
        $("#sb1").css("background","#03ff7f");
        $("#sb1").css("box-shadow","0px 0px 20px #03ff7f");
        $("#sb1").css("transition","background 0.3s ease-in-out, box-shadow 0.3s ease-in-out");
       
    }
    );        

    $("#sbText").mouseleave(function()
    {
        a = $("#sText1").css("font-size");
        b = (parseFloat(a));
        c = b - 10;
        //$("#sText1").css("font-size",c);
        //$("#sText1").css("transform","scale(1.1)");
        $("#sText1,#sText2").removeClass("zoom");
        $("#sText1,#sText2").css("transition","all 0.2s ease-in-out");   
        $("#sellimg1").css("height","200px","width","210"); 
        $("#sellimg1").css("transition","height 0.2s ease-in-out");  
        $("#sb1").css("background","lightgrey");
        $("#sb1").css("transition","background 0.2s ease-in-out, box-shadow 0.3s ease-in-out"); 
        $("#sb1").css("box-shadow","0px 0px 0px #03ff7f");       
    }
    );

    $("#bbText").mouseenter(function()
    {
        $("#bText1,#bText2").addClass("zoom");
        $("#bText1,#bText2").css("transition","all 0.3s ease-in-out");
        $("#bText1").css("color","black");
        $("#bText2").css("color","black");
        $("#bText1").css("transition","all 0.3s ease-in-out");       
        $("#buyimg1").css("height","200px","width","210"); 
        $("#buyimg1").css("filter","invert(0%)");
        $("#buyimg1").css("transition","height 0.3s ease-in-out,width 0.3s ease-in-out");
        $("#bb1").css("background","#03ff7f");
        $("#bb1").css("box-shadow","0px 0px 20px #03ff7f");
        $("#bb1").css("transition","background 0.3s ease-in-out, box-shadow 0.3s ease-in-out");
    }   
    );

    $("#bbText").mouseleave(function()
    {
        $("#bText1,#bText2").removeClass("zoom");
        $("#bText2").css("color","white");
        $("#bText1").css("color","white");
        $("#bText1").css("transition","all 0.2s ease-in-out");       
        $("#buyimg1").css("height","180px","width","190"); 
        $("#buyimg1").css("transition","height 0.2s ease-in-out,width 0.3s ease-in-out");
        $("#bb1").css("background","#303030");
        $("#bb1").css("box-shadow","0px 0px 0px #03ff7f");
        $("#buyimg1").css("filter","invert(100%)");
        $("#bb1").css("transition","background 0.2s ease-in-out, box-shadow 0.3s ease-in-out");
    }   
    );
    

    a =  $(window).width();

    b =  $("#sb1").width();
    $("#sb1,#bb1").css("width",b);
    $("#sb1,#bb1").css("height",b);
    $("#sText1, #bText1").css("font-size",b/3.3);
    $("#sText2, #bText2").css("font-size",b/7);

    c = $("#db1").width();
    $("#db1,#db2,#db3").css("height",c);
    $("#dt1,#dt3,#dt5").css("font-size",c/2);
    $("#dt2,#dt4,#dt6").css("font-size",c/7);

    if(a<=750)
    {
        $("#l1").css("width",70);
        $("#l1").css("height",100);
        $("#lb1,#lb2,#lb3").removeClass("my-5");
        $("#lb2").addClass("mb-4");
        $("#lb3").addClass("my-4");
        $("#lb4").removeClass("mt-5");
        $("#lb4").addClass("mt-0");
        $("#lb5").css("font-size","40px");
        $("#lb6").css("transform","translate(0px,-20px)");
    }
    else
    {
        $("#l1").css("width",200);
        $("#l1").css("height",300);
        $("#lb1,#lb2,#lb3").addClass("my-5");
        $("#lb2").removeClass("mb-4");
        $("#lb3").removeClass("my-4");
        $("#lb4").addClass("mt-5");
        $("#lb4").removeClass("mt-0")
        $("#lb5").css("font-size","60px");
        $("#lb6").css("transform","translate(0px,0px)");
    }


    if(a <= 375)
        {
            $("#sText1").addClass("mt-3");
        }
        else
        {
            $("#sText1").addClass("mt-4");
        }

    if(( a <= 1024) && ( a >= 768))   
    {
        $("#search").attr("placeholder","Search");
    }
    else
    {
        $("#search").attr("placeholder","Search Book Name, Author etc");
    }

    loc = $(location).attr("href");
    

    $(window).on('resize', function(){
        
        var win = $(this); //this = window            
        if ( (win.width() <992) && (win.width() > 768) )
        {
            $("#search").attr("placeholder","Search");
        }
        else
        {
            $("#search").attr("placeholder","Search Book Name, Author etc");
        }

        b =  $("#sb1").width();
        $("#sb1,#bb1").css("width",b);
        $("#sb1,#bb1").css("height",b);
       
        $("#sText1,#bText1").css("font-size",b/3.3);
        $("#sText2,#bText2").css("font-size",b/7);

        c = $("#db1").width();
        $("#db1,#db2,#db3").css("height",c);       
        $("#dt1, #dt3, #dt5").css("font-size",c/2);
        $("#dt2, #dt4, #dt6").css("font-size",c/7);     

        a =  $(window).width();
        if(a<=750)
        {
            $("#l1").css("width",70);
            $("#l1").css("height",100);
            $("#lb1,#lb2,#lb3").removeClass("my-5");
            $("#lb2").addClass("mb-4");
            $("#lb3").addClass("my-4");
            $("#lb4").removeClass("mt-5");
            $("#lb4").addClass("mt-0");
            $("#lb5").css("font-size","40px");
            $("#lb6").css("transform","translate(0px,-20px)");
        }
        else
        {
            $("#l1").css("width",200);
            $("#l1").css("height",300);
            $("#lb1,#lb2,#lb3").addClass("my-5");
            $("#lb2").removeClass("mb-4");
            $("#lb3").removeClass("my-4");
            $("#lb4").addClass("mt-5");
            $("#lb4").removeClass("mt-0")
            $("#lb5").css("font-size","60px");
            $("#lb6").css("transform","translate(0px,0px)");
        }
        
    });
    
}
);



