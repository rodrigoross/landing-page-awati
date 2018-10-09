/*!
    * nqvb.js beta v0.1 - Nois Que Voa Bruxao - Magia em JS
    * Feito por Rodrigo Ross 
    * Awati Tecnologia planejada */

//-----Functions

//Delete IMG when resized
function delChild(parent, mySize)
{
    // Try to get div node with IMG if it already exists remove it to be replaced with right resolution
    var wrongChild = document.getElementById("cel-img");
    //console.log(wrongChild);
    if (wrongChild !== null)
    {
        //console.log(mySize);
        parent.removeChild(wrongChild);
    }
};

//change classes when resizing
function undesired()
{
    var node = document.getElementById("formulario");
    //console.log(node);
                                                
    node.classList.remove("float-right");
    node.classList.remove("mt-5");

    node.classList.add("m-3");
}

//hide/show image element
function toggle(frame, sit)
{       
    //console.log("entrei");
    if(sit === "off")
    {
        frame.style.display = "none";
        frame.style.visibility = "hidden";
    } 
    else if (sit === "on" )
    {
        frame.style.display= "block";
        frame.style.visibility = "visible";
    }
    
}

//verify if nodes exist
function exist()
{
    //var verifier = document.getElementById("promo");
    //console.log(verifier);
    
    if( document.getElementById("promo") !== null)
    {
        return true;
    } else {
        return false;
    }
}

//Create DIV and IMG if it was removed
function birth()
{
    //get references
    var grandpa = document.getElementById("caixa");
    var uncle = document.getElementById("formulario");

    //Create elements
    var nodeDiv = document.createElement("div");
    var nodeImg = document.createElement("img");

    //Edit ID and classes
    nodeDiv.id = "cel-img";
    nodeImg.id = "promo";

    //Append new nodes
    nodeDiv.appendChild(nodeImg);
    
    //console.log("sussa ate aqui");
    //isnert before formulario
    
    grandpa.insertBefore(nodeDiv, uncle);

    return nodeImg;
}

//Change src of image if doesn't exist create it then change
function doTheThing(newSrc)
{
    if(exist())
    {
        //var parent = document.getElementById("caixa");

        //delChild(parent,newSrc);
        
        //var nodeImg = birth();                   
        //Edit IMG to fit tablet or landscape position
        toggle(document.getElementById("cel-img"), "on");
        
        //Edit classes
        document.getElementById("promo").src = newSrc;
        document.getElementById("promo").classList.add("img-fluid");
        
        stylize();

        //nodeImg.classList.add("img-fluid");
    } else {
        //create new node for the img
        var nodeImg = birth();
        
        toggle(document.getElementById("cel-img"), "on");
        
        nodeImg.src = newSrc;
        nodeImg.classList.add("img-fluid");
        
        stylize();
    }
}

//Sleep simulator

//Change classes of Form
function stylize()
{
    document.getElementById("formulario").classList.remove("mt-5");
    document.getElementById("formulario").classList.remove("float-right");
    document.getElementById("formulario").classList.add("m-3");
}

//FirstShot
function firstShot(){
    
    //Get mobile view
    enquire.register("(max-width: 361px)",
    {
        match: function()
        {
            //toggle(document.getElementById("cel-img"), "on");
            //kinda of do nothing here
        },

        unmatch: function()
        {
            if(exist())
            {
                delChild(document.getElementById("caixa", "362"));    
            }
        }
    });

    //get landscape view
    enquire.register("(min-width: 362px) and (max-width: 576px)",
    {
        match: function()
        {
            undesired();
            doTheThing("https://via.placeholder.com/560x1000");             
        },

        unmatch: function()
        {
            //nothing to see here
        }
    });

    //Get a tablet view
    enquire.register("(min-width: 577px) and (max-width: 780px)",
    {
        match: function()
        {
           
            doTheThing("https://via.placeholder.com/720x900");
        },

        unmatch: function()
        {
            //Stil nothing
        }
    });

    //get a landscape tablet view
    enquire.register("(min-width: 781px) and (max-width: 991px)",
    {
        match: function()
        {
            doTheThing("https://via.placeholder.com/960x1040");
        },

        unmatch: function()
        {
            //unbelievable right
        }
    });

    //get a small desktop view
    enquire.register("(min-width: 992px) and (max-width: 1199px)",
    {
        match: function()
        {   
            toggle(document.getElementById("cel-img"), "off");
            
            if(exist())
            {
                delChild(document.getElementById("caixa"),1040);
            }
            
            //Call big template
            bigFixer();
        },

        unmatch: function()
        {
            //Now you are probably pissed.
        }
    });
    
    //get a big desktop view
    enquire.register("(min-width: 1200px)",
    {
        match: function()
        {
            
            toggle(document.getElementById("cel-img"), "off");
            //removeIt();
            bigFixer();

        },

        unmatch: function()
        {
            //boom tchakalaka
            
        }
    });
}

// do the thing but for bigger resolutions
function bigFixer() {
    var floatForm = document.getElementById("formulario");
    
    //Edit classes of form 
    try
    {
        if (floatForm == null) throw "Null form";        
    }
    catch(err)
    {
        console.log(err);
    }
    finally
    {
        if(floatForm !== null)
        {
            floatForm.classList.remove("m-3");
            floatForm.classList.add("float-right");
            floatForm.classList.add("mt-5");
        }
    }
}

//SecondShot is fired when window is resized, it'll run a lot be prepared
function secondShot(){
    console.log("mexi");
    //Execute firstshot again 
    //firstShot();
}
//Validator of Form
function validate()
{
    //Helps validate checking if is empty
    function isEmpty(field)
    {
        if (field == "" || field=== null)
        {
            return true;
        } else {
            return false;
        }
    };

    //var name = document.forms["formContato"]["nome"].value;
    //var eMail = document.forms["formContato"]["mail"].value;
    var tel = document.forms["formContato"]["tel"].value;
    //var name = document.forms["formContato"]["mensagem"].value;

    //check if tel is a phone number with minlength at 8 digits the html alçready handled with it reachs the max of 12 digits
    if(isNaN(tel))
    {
        alert("Informe um número válido");
        return false;
    } else if (tel.length < 8)
    {  
        alert("Telefone Invalido");
        return false;
    }

}

//------Code
//Do a preemptive run of enquire to load correctly, I know  that there is a better way somewhere
window.onload = function()
{
    
    firstShot();
    
}

//Run enquire when resized
window.addEventListener("resize", secondShot());

$('#confirmacao').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
