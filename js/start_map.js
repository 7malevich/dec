function ShowMapGroup(me, text)
{
document.getElementById("mapgroup_filials").style.display="none";
document.getElementById("mapgroup_dzo").style.display="none";
document.getElementById(me).style.display="block";
}

function ShowMapFilial(me, text)
{
var card;
card = "map_filial_card_" + me;
document.getElementById("map_filial_card_dalsbyt").style.display="none";
document.getElementById("map_filial_card_khabsbyt").style.display="none";
document.getElementById("map_filial_card_eaosbyt").style.display="none";
document.getElementById("map_filial_card_amursbyt").style.display="none";
document.getElementById("map_filial_card_sklsbyt").style.display="none";
document.getElementById(card).style.display="block";

var link;
link = "map_filial_link_" + me;
document.getElementById("map_filial_link_dalsbyt").style.background="none";
document.getElementById("map_filial_link_dalsbyt").style.color="#000000";
document.getElementById("map_filial_link_khabsbyt").style.background="none";
document.getElementById("map_filial_link_khabsbyt").style.color="#000000";
document.getElementById("map_filial_link_eaosbyt").style.background="none";
document.getElementById("map_filial_link_eaosbyt").style.color="#000000";
document.getElementById("map_filial_link_amursbyt").style.background="none";
document.getElementById("map_filial_link_amursbyt").style.color="#000000";
document.getElementById("map_filial_link_sklsbyt").style.background="none";
document.getElementById("map_filial_link_sklsbyt").style.color="#000000";
document.getElementById(link).style.background="#167bca";
document.getElementById(link).style.color="#ffffff";
}