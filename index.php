<!DOCTYPE html> 
<head> 
    <title> 
        How to get selected value in  
        dropdown list using JavaScript? 
    </title> 
</head> 
  
<body> 
    <h1 style="color: green"> 
        GeeksForGeeks 
    </h1> 
      
    <b> 
        How to get selected value in  
        dropdown list using JavaScript? 
    </b> 
      
    <p> 
        Select one from the given options: 
        <select id="select1"> 
            <option value="free" id="k">Free</option> 
            <option value="basic" id="m">Basic</option> 
            <option value="premium" id='j'>Premium</option> 
        </select> 
    </p> 
      
    <p> 
        The value of the option selected is:  
        <span class="output"></span> 
    </p> 
      
    <button onclick="getOption()"> 
        Check option 
    </button> 
      
    <script type="text/javascript">s 
        function getOption() { 
            selectElement = document.querySelector('#select1'); 
                      
            output =  
              selectElement.options[selectElement.selectedIndex].value; 
  alert(output);
            //document.querySelector('.output').textContent = output; 
        } 
    </script> 
</body> 
  
</html> 