<?php
echo"<h2>GIT käsud</h2>";
echo "<ol>";
echo "<li>Repo loomine";
echo "<pre>git init</pre>";
echo "</li>";
?>
<li>Konfigureerimine
<pre>
git config --global user.name "Igor Aleksejev"
git config --global user.email "igoralekseje@gmail.com"
git config --global --list

</pre>
</li>
<li>
    ssh võti loomine
    <pre>
        ssh-keygen -o -t rsa -C "igoralekseje@gmail.com"
    </pre>
    id_rsa.pub võti kopeeritakse githubi nagu deploy key
</li>
<li>
    jälgimise lisamine ja commit'i tegemine
    <pre>
        git status
        git add .
        git commit -a -m "commiti tekst"
    </pre>
</li>
<?php
echo "<li>GITHUB projektiga sidumine";
echo "<pre>";
echo"git remote add origin git@github.com:IgorAleksejevTTHK/veebPHP.git

git branch -M main

C:\Users\opilane\Desktop\php1tund>git push -u origin main";
echo "</pre>";
echo "</li>";

echo "<li>Projektikloonime desktopi. <br>
* Kontrolli, et id_rsa võti on olemas .ssh kaustas <br>
*GIT CMD on lahti ja <br>";
echo "<pre>";
echo "git clone git@github.com:IgorAleksejevTTHK/veebPHP.git";
echo "</pre>";
echo "</li>";
echo "</ol>";