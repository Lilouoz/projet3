<?php


class Texte{

public static function limit($texte,$nbr)
{

return (strlen($texte) > $nbr ? substr(substr($texte,0,$nbr),0,strrpos(substr($texte,0,$nbr)," "))." ..." :$texte);
}
<?php echo Texte::limit($post->description,350); ?>






	} ?>