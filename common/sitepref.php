<?
   switch($_COOKIE['dvec_region2']){
      case 'amursbyt':
         $CurrMenu = '_amur';
         $SitePref = '/amursbyt/';
         break;
      case 'amur-blag':
         $CurrMenu = '_amur-blag';
         $SitePref = '/amur-blag/';
         break;
      case 'eaosbyt':
         $CurrMenu = '_eao';
         $SitePref = '/eaosbyt/';
         break;
      case 'khabsbyt':
         $CurrMenu = '_khab';
         $SitePref = '/khabsbyt/';
         break;
      case 'dalsbyt':
         $CurrMenu = '_dal';
         $SitePref = '/dalsbyt/';
         break;
   default:
         $CurrMenu = '';
         $SitePref = '/';
         break;
}
?>