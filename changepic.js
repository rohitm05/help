
var myImage=document.getElementById("mypic");
var ia=["C:\Users\Rony Gupta\Desktop\New folder\odisha\UN1581130.jpg","C:\Users\Rony Gupta\Desktop\New folder\odisha\1-21.jpg","C:\Users\Rony Gupta\Desktop\New folder\odisha\slide1.jpg"];
var index=0;
function change(){
mypic.SetAttribute("src",ia [index]);
index++;
if(index>=ia.length())
{
index=0;
}
}
SetInterval('change()',2000);

}