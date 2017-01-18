DomReady.ready(function() {
var n=34;

var areas=document.getElementsByTagName("area");

for(i=0; i<areas.length; i++)
	{
		areas[i].onclick=function(){id=this.toString();id=id.substring(id.indexOf('#')+1);op(id);};
	}


var a_areas=document.getElementsByTagName('a');

for(i=0; i<a_areas.length; i++)
	{
		cls=a_areas[i].className;
		if(cls=='area')
		{
			a_areas[i].onclick=function(){id=this.toString();id=id.substring(id.indexOf('#')+1);op(id);};
		}
	}


document.getElementById('cont2_1').onclick=function(){op(1)};
document.getElementById('cont2_2').onclick=function(){op(2)};
document.getElementById('cont2_3').onclick=function(){op(3)};
document.getElementById('cont2_4').onclick=function(){op(4)};
document.getElementById('cont2_5').onclick=function(){op(5)};
document.getElementById('cont2_6').onclick=function(){op(6)};
document.getElementById('cont2_7').onclick=function(){op(7)};
document.getElementById('cont2_8').onclick=function(){op(8)};
document.getElementById('cont2_9').onclick=function(){op(9)};
document.getElementById('cont2_10').onclick=function(){op(10)};
document.getElementById('cont2_11').onclick=function(){op(11)};
document.getElementById('cont2_12').onclick=function(){op(12)};
document.getElementById('cont2_13').onclick=function(){op(13)};
document.getElementById('cont2_14').onclick=function(){op(14)};
document.getElementById('cont2_15').onclick=function(){op(15)};
document.getElementById('cont2_16').onclick=function(){op(16)};
document.getElementById('cont2_17').onclick=function(){op(17)};
document.getElementById('cont2_18').onclick=function(){op(18)};
document.getElementById('cont2_19').onclick=function(){op(19)};
document.getElementById('cont2_20').onclick=function(){op(20)};
document.getElementById('cont2_21').onclick=function(){op(21)};
document.getElementById('cont2_22').onclick=function(){op(22)};
document.getElementById('cont2_23').onclick=function(){op(23)};
document.getElementById('cont2_24').onclick=function(){op(24)};
document.getElementById('cont2_25').onclick=function(){op(25)};
document.getElementById('cont2_26').onclick=function(){op(26)};
document.getElementById('cont2_27').onclick=function(){op(27)};
document.getElementById('cont2_28').onclick=function(){op(28)};
document.getElementById('cont2_29').onclick=function(){op(29)};
document.getElementById('cont2_30').onclick=function(){op(30)};
document.getElementById('cont2_31').onclick=function(){op(31)};
document.getElementById('cont2_32').onclick=function(){op(32)};
document.getElementById('cont2_33').onclick=function(){op(33)};
document.getElementById('cont2_34').onclick=function(){op(34)};


function op(id) {
	m=id;
	cmm=document.getElementById('cont_'+id);
	cmm8=document.getElementById('cont_b_'+id);
	if(cmm)
	{
		cmm.style.display='block';
	}
	if(cmm8)
	{
		cmm8.style.display='block';
	}

	cmm6=document.getElementById('cont_all');
	if(cmm6)
	{
		cmm6.style.display='block';
	}
	
	cmm2=document.getElementById('contacts1');
	if(cmm2)
	{
	cmm2.style.display='none';
	}

	cmm5=document.getElementById('contacts2');
	if(cmm5)
	{
		cmm5.style.display='none';
	}
	cmm6=document.getElementById('contacts3');
	if(cmm6)
	{
		cmm6.style.display='none';
	}
	cmm10=document.getElementById('contacts4');
	if(cmm10)
	{
		cmm10.style.display='none';
	}

	for(i=1;i<=n;i++) {
		if (i!=m) {
			cmm3=document.getElementById('cont_'+i);
			cmm3.style.display='none';
			cmm7=document.getElementById('cont_b_'+i);
			cmm7.style.display='none';
			
		}
		cmm4=document.getElementById('cont2_'+i);
		if(cmm4)
		{
			cmm4.style.display='none';
		}
	}

	return false;
}

//op('0');
});