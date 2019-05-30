 <?php
         function addFunction($num1, $num2) {
            $ans = $num1 * $num2;
            echo "Multiplication of the two numbers is : $ans";
         }


       
      
         
         addFunction(3, 1);

         addFunction(4,5);

         addFunction(1,raten);

         addFunction(5,4.5);

         addFunction(3.4,5);



           if ($num1 == 0 || $num2 == 0) {
        return 0;
    }

    if ($num2 < 0) {
        return add(-$num1, -$num2);
    }

    // Since we use recursion we need a base case.
    if ($num2 == 1) {
        return i;
    }

    // Define our problem in terms of the same problem, but of smaller size. 
    return $num1 + add($num1, $num2 - 1);

      ?>