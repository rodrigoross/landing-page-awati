/*!
    * nqvb.js beta v0.1 - Nois Que Voa Bruxao - Magia em JS
    * Feito por Rodrigo Ross 
    * Awati Tecnologia planejada */


//Delete IMG when resized
function delChild(parent, mySize)
{
    // Try to get div node with IMG if it already exists remove it to be replaced with right resolution
    var wrongChild = document.getElementById("cel-img");
    console.log(wrongChild);
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

function stylize() {
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
            var floatForm = document.getElementById("formulario");
            
            //Edit classes of form 
            floatForm.classList.remove("m-3");
            floatForm.classList.add("float-right");
            floatForm.classList.add("mt-5");
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
            //removeIt();
            var floatForm = document.getElementById("formulario");
            
            //Edit classes of form 
            floatForm.classList.remove("m-3");
            floatForm.classList.add("float-right");
            floatForm.classList.add("mt-5");
        },

        unmatch: function()
        {
            //boom tchakalaka
            
        }
    });
}

//Do a preemptive run of enquire to load correctly, I know  that there is a better way somewhere
window.onload = function()
{
    toggle(document.getElementById("cel-img"), "off");
    firstShot();
    
}

//Enquire run
enquire.register("(max-width: 361px)",
{
    //Code to be executed if screen width is under 361px
    match: function()
    {         
        console.log("360");
        if(!exist())
        {
            console.log("já existo");
        } 
        else 
        {
            doTheThing("https://via.placeholder.com/340x1200");
        }
    },
    
    //Enter if screen width is above 361px
    unmatch()
    {
        //Try if width is above 361 and under 576
        enquire.register("(max-width: 576px)",
        {
            //Triggered when media query matches.
            match : function ()
            {
                doTheThing("https://via.placeholder.com/560x1000");
            },
            
            //If width is above 576 
            unmatch: function()
            {

                //try for width above 576 and under 770px
                enquire.register("(max-width: 780px)",
                {
                    //Triggered when media query matches.
                    match : function ()
                    {
                        doTheThing("https://via.placeholder.com/720x900");
                    },
                
                    //if width is above 780px
                    unmatch: function()
                    {
                        //Try if width s above 780 and under 991
                        enquire.register("(max-width: 991px)",
                        {
                            //Triggered when media query matches.
                            match : function ()
                            {
                                doTheThing("https://via.placeholder.com/960x1040");                 
                            },
                            
                            //If width is above 991 
                            unmatch: function()
                            {                
                                //You get it now
                                enquire.register("(min-width: 992px) and (max-width: 1199px)",
                                {
                                    //Triggered when media query matches.
                                    match : function ()
                                    {
                                        

                                        var floatForm = document.getElementById("formulario");
                                        
                                        //Edit classes of form 
                                        floatForm.classList.remove("m-3");
                                        floatForm.classList.add("float-right");
                                        floatForm.classList.add("mt-5");
                                                                                
                                    },
                                
                                    //if width is above 780px
                                    unmatch: function()
                                    {
                                        enquire.register("(min-width: 1200px)",
                                        {
                                            //Triggered when media query matches.
                                            match : function ()
                                            {
                                                var floatForm = document.getElementById("formulario");
                                                  
                                                delChild(document.getElementById("caixa"),"1040");

                                                //Edit classes of form 
                                                floatForm.classList.remove("m-3");
                                                floatForm.classList.add("float-right");
                                                floatForm.classList.add("mt-5");


                                            },
                                        
                                            //if width is above 780px
                                            unmatch: function()
                                            {
                                                //Edit classes of form 
                                                undesired();
                                            }
                                        });
                                        
                                        //undesired();
                                    }
                                });
                            
                                //undesired();
                            }
                        });
                    
                        //undesired();
                    }
                });
            
                //undesired();
            }
        });
        
        //undesired();
    }
});