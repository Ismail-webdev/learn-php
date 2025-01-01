<?php

echo "Happy New Year Countdown: \n";

for($i = 10; $i > 0; $i-- ){
  echo "$i...";

  if ($i == 1) {
    echo "Happy New Year!! 🥳🥳🥳\n";
  }
  sleep(1);
}

?>