
<html>

<body>
     <?php 
    if (isset($_REQUEST['ok'])) {
        $xml = new DOMDocument("1.0","UTF-8");
        $xml->load("student.xml");      

        $rootTag = $xml->getElementsByTagName("document")->item(0);

        $dataTag = $xml->createElement("data");

        $aTag = $xml->createElement("a",$_REQUEST['a']);
        $bTag = $xml->createElement("b",$_REQUEST['b']);

        $dataTag->appendchild($aTag);   
        $dataTag->appendchild($bTag);

        $rootTag->appendchild($dataTag);

         $xml->save("student.xml");      
    }

     ?>   

   
    <form method="post" action="index.php">
     <label>First Name</label>
     <input type="text" name="a"  />
   
    
     <label>Last Name</label>
     <input type="text" name="b"  />
    
    
     <input type="submit" name="ok"  value="Add" />
  
   </form>
  

 </body>
</html>

