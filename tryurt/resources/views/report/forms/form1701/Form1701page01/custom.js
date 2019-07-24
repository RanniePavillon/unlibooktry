$(function(){
	$('input[name="pg3Item72Taxpayer"], input[name="pg3Item72Spouse"]').change(function(){
		// pg3Item72Taxpayer = getInt($('input[name="pg3Item72Taxpayer"]').val());
		// pg3Item72Spouse = getInt($('input[name="pg3Item72Spouse"]').val());
		
		pg1Item26 = pg3Item72Taxpayer + pg3Item72Spouse;
		
		$('input[name="pg1Item26"]').val(pg1Item26);
		$('input[name="pg1Item26"]').change();
	});
	$('input[name="pg3Item76Taxpayer"], input[name="pg3Item76Spouse"]').change(function(){
		// pg3Item76Taxpayer = getInt($('input[name="pg3Item76Taxpayer"]').val());
		// pg3Item76Spouse = getInt($('input[name="pg3Item76Spouse"]').val());
		
		pg1Item27 = pg3Item76Taxpayer + pg3Item76Spouse;
		
		$('input[name="pg1Item27"]').val(pg1Item27);
		$('input[name="pg1Item27"]').change();
	});
	$('input[name="pg1Item26"], input[name="pg1Item27"]').change(function(){
		// pg1Item26 = getInt($('input[name="pg1Item26"]').val());
		// pg1Item27 = getInt($('input[name="pg1Item27"]').val());
		
		pg1Item28 = pg1Item26 - pg1Item27;
		
		$('input[name="pg1Item28"]').val(pg1Item28);
		$('input[name="pg1Item28"]').change();
	});
	$('input[name="pg1Item28"], input[name="pg1Item29"]').change(function(){
		// pg1Item28 = getInt($('input[name="pg1Item28"]').val());
		// pg1Item29 = getInt($('input[name="pg1Item29"]').val());
		
		pg1Item30 = pg1Item28 - pg1Item29;
		
		$('input[name="pg1Item30"]').val(pg1Item30);
		$('input[name="pg1Item30"]').change();
	});
	$('input[name="pg3Item84Spouse"]').change(function(){
		// pg3Item84Spouse = getInt($('input[name="pg3Item84Spouse"]').val());
		
		pg1Item31 = pg3Item84Spouse;
		
		$('input[name="pg1Item31"]').val(pg1Item31);
		$('input[name="pg1Item31"]').change();
	});
	
	$('input[name="pg1Item30"], input[name="pg1Item31"]').change(function(){
		// pg1Item30 = getInt($('input[name="pg1Item30"]').val());
		// pg1Item31 = getInt($('input[name="pg1Item31"]').val());
		
		pg1Item32 = pg1Item30 + pg1Item31;
		
		$('input[name="pg1Item32"]').val(pg1Item32);
		$('input[name="pg1Item32"]').change();
	});
	
	$('input[name="pg2Item41Taxpayer"], input[name="pg2Item42Taxpayer"]').change(function(){
		// pg2Item41Taxpayer = getInt($('input[name="pg2Item41Taxpayer"]').val());
		// pg2Item42Taxpayer = getInt($('input[name="pg2Item42Taxpayer"]').val());
		
		pg2Item43Taxpayer = pg2Item41Taxpayer - pg2Item42Taxpayer;
		
		$('input[name="pg2Item43Taxpayer"]').val(pg2Item43Taxpayer);
		$('input[name="pg2Item43Taxpayer"]').change();
	});
	
	$('input[name="pg2Item41Spouse"], input[name="pg2Item42Spouse"]').change(function(){
		// pg2Item41Spouse = getInt($('input[name="pg2Item41Spouse"]').val());
		// pg2Item42Spouse = getInt($('input[name="pg2Item42Spouse"]').val());
		
		pg2Item43Spouse = pg2Item41Spouse - pg2Item42Spouse;
		
		$('input[name="pg2Item43Spouse"]').val(pg2Item43Spouse);
		$('input[name="pg2Item43Spouse"]').change();
	});
	
	$('input[name="pg2Item44Taxpayer"], input[name="pg2Item45Taxpayer"], input[name="pg2Item46Taxpayer"]').change(function(){
		// pg2Item44Taxpayer = getInt($('input[name="pg2Item44Taxpayer"]').val());
		// pg2Item45Taxpayer = getInt($('input[name="pg2Item45Taxpayer"]').val());
		// pg2Item46Taxpayer = getInt($('input[name="pg2Item46Taxpayer"]').val());
		
		pg2Item47Taxpayer = pg2Item44Taxpayer + pg2Item45Taxpayer + pg2Item46Taxpayer;
		
		$('input[name="pg2Item47Taxpayer"]').val(pg2Item47Taxpayer);
		$('input[name="pg2Item47Taxpayer"]').change();
	});
	
	$('input[name="pg2Item44Spouse"], input[name="pg2Item45Spouse"], input[name="pg2Item46Spouse"]').change(function(){
		// pg2Item44Spouse = getInt($('input[name="pg2Item44Spouse"]').val());
		// pg2Item45Spouse = getInt($('input[name="pg2Item45Spouse"]').val());
		// pg2Item46Spouse = getInt($('input[name="pg2Item46Spouse"]').val());
		
		pg2Item47Spouse = pg2Item44Spouse + pg2Item45Spouse + pg2Item46Spouse;
		
		$('input[name="pg2Item47Spouse"]').val(pg2Item47Spouse);
		$('input[name="pg2Item47Spouse"]').change();
	});
	
	$('input[name="pg2Item43Taxpayer"], input[name="pg2Item47Taxpayer"]').change(function(){
		// pg2Item43Taxpayer = getInt($('input[name="pg2Item43Taxpayer"]').val());
		// pg2Item47Taxpayer = getInt($('input[name="pg2Item47Taxpayer"]').val());
		
		pg2Item48Taxpayer = pg2Item43Taxpayer - pg2Item47Taxpayer;
		
		$('input[name="pg2Item48Taxpayer"]').val(pg2Item48Taxpayer);
		$('input[name="pg2Item48Taxpayer"]').change();
	});
	
	$('input[name="pg2Item43Spouse"], input[name="pg2Item47Spouse"]').change(function(){
		// pg2Item43Spouse = getInt($('input[name="pg2Item43Spouse"]').val());
		// pg2Item47Spouse = getInt($('input[name="pg2Item47Spouse"]').val());
		
		pg2Item48Spouse = pg2Item43Spouse - pg2Item47Spouse;
		
		$('input[name="pg2Item48Spouse"]').val(pg2Item48Spouse);
		$('input[name="pg2Item48Spouse"]').change();
	});
	
	$('input[name="pg2Item43Taxpayer"], input[name="pg2Item47Taxpayer"]').change(function(){
		// pg2Item43Taxpayer = getInt($('input[name="pg2Item43Taxpayer"]').val());
		// pg2Item47Taxpayer = getInt($('input[name="pg2Item47Taxpayer"]').val());
		
		pg2Item49Taxpayer = pg2Item47Taxpayer - pg2Item43Taxpayer;
		
		$('input[name="pg2Item49Taxpayer"]').val(pg2Item49Taxpayer);
		$('input[name="pg2Item49Taxpayer"]').change();
	});
	
	$('input[name="pg2Item43Spouse"], input[name="pg2Item47Spouse"]').change(function(){
		// pg2Item43Spouse = getInt($('input[name="pg2Item43Spouse"]').val());
		// pg2Item47Spouse = getInt($('input[name="pg2Item47Spouse"]').val());
		
		pg2Item49Spouse = pg2Item47Spouse - pg2Item43Spouse;
		
		$('input[name="pg2Item49Spouse"]').val(pg2Item49Spouse);
		$('input[name="pg2Item49Spouse"]').change();
	});
	
	$('input[name="pg5Sched2Item5Taxpayer"]').change(function(){
		// pg5Sched2Item5Taxpayer = getInt($('input[name="pg5Sched2Item5Taxpayer"]').val());
		
		pg2Item50Taxpayer = pg5Sched2Item5Taxpayer;
		
		$('input[name="pg2Item50Taxpayer"]').val(pg2Item50Taxpayer);
		$('input[name="pg2Item50Taxpayer"]').change();
	});
	
	$('input[name="pg5Sched2Item5Spouse"]').change(function(){
		// pg5Sched2Item5Spouse = getInt($('input[name="pg5Sched2Item5Spouse"]').val());
		
		pg2Item50Spouse = pg5Sched2Item5Spouse;
		
		$('input[name="pg2Item50Spouse"]').val(pg2Item50Spouse);
		$('input[name="pg2Item50Spouse"]').change();
	});
	
	$('input[name="pg5Sched3Item3Taxpayer"]').change(function(){
		// pg5Sched2Item3Taxpayer = getInt($('input[name="pg5Sched2Item3Taxpayer"]').val());
		
		pg2Item51Taxpayer = pg5Sched3Item3Taxpayer;
		
		$('input[name="pg2Item51Taxpayer"]').val(pg2Item51Taxpayer);
		$('input[name="pg2Item51Taxpayer"]').change();
	});
	
	$('input[name="pg5Sched3Item3Spouse"]').change(function(){
		// pg5Sched2Item3Spouse = getInt($('input[name="pg5Sched2Item3Spouse"]').val());
		
		pg2Item51Spouse = pg5Sched3Item3Spouse;
		
		$('input[name="pg2Item51Spouse"]').val(pg2Item51Spouse);
		$('input[name="pg2Item51Spouse"]').change();
	});
	
	$('input[name="pg2Item50Taxpayer"], input[name="pg2Item51Taxpayer"]').change(function(){
		// pg2Item50Taxpayer = getInt($('input[name="pg2Item50Taxpayer"]').val());
		// pg2Item51Taxpayer = getInt($('input[name="pg2Item51Taxpayer"]').val());
		
		pg2Item52Taxpayer = pg2Item50Taxpayer + pg2Item51Taxpayer;
		
		$('input[name="pg2Item52Taxpayer"]').val(pg2Item52Taxpayer);
		$('input[name="pg2Item52Taxpayer"]').change();
	});
	
	$('input[name="pg2Item50Spouse"], input[name="pg2Item51Spouse"]').change(function(){
		// pg2Item50Spouse = getInt($('input[name="pg2Item50Spouse"]').val());
		// pg2Item51Spouse = getInt($('input[name="pg2Item51Spouse"]').val());
		
		pg2Item52Spouse = pg2Item50Spouse + pg2Item51Spouse;
		
		$('input[name="pg2Item52Spouse"]').val(pg2Item52Spouse);
		$('input[name="pg2Item52Spouse"]').change();
	});
	
	$('input[name="pg6Sched4cItem27Taxpayer"]').change(function(){
		// pg6Sched4cItem27Taxpayer = getInt($('input[name="pg6Sched4cItem27Taxpayer"]').val());
		
		pg2Item53Taxpayer = pg6Sched4cItem27Taxpayer;
		
		$('input[name="pg2Item53Taxpayer"]').val(pg2Item53Taxpayer);
		$('input[name="pg2Item53Taxpayer"]').change();
	});
	
	$('input[name="pg6Sched4cItem27Spouse"]').change(function(){
		// pg6Sched4cItem27Spouse = getInt($('input[name="pg6Sched4cItem27Spouse"]').val());
		
		pg2Item53Spouse = pg6Sched4cItem27Spouse;
		
		$('input[name="pg2Item53Spouse"]').val(pg2Item53Spouse);
		$('input[name="pg2Item53Spouse"]').change();
	});
	//item54
	
	$('input[name="pg2Item52Taxpayer"], input[name="pg2Item53Taxpayer"]').change(function(){
		// pg2Item52Taxpayer = getInt($('input[name="pg2Item52Taxpayer"]').val());
		// pg2Item53Taxpayer = getInt($('input[name="pg2Item53Taxpayer"]').val());
		
		pg2Item54Taxpayer = pg2Item52Taxpayer - pg2Item53Taxpayer;
		
		$('input[name="pg2Item54Taxpayer"]').val(pg2Item54Taxpayer);
		$('input[name="pg2Item54Taxpayer"]').change();
	});
	
	$('input[name="pg2Item52Spouse"], input[name="pg2Item53Spouse"]').change(function(){
		// pg2Item52Spouse = getInt($('input[name="pg2Item52Spouse"]').val());
		// pg2Item53Spouse = getInt($('input[name="pg2Item53Spouse"]').val());
		
		pg2Item54Spouse = pg2Item52Spouse - pg2Item53Spouse;
		
		$('input[name="pg2Item54Spouse"]').val(pg2Item54Spouse);
		$('input[name="pg2Item54Spouse"]').change();
	});
	//item55
	
	$('input[name="pg6Sched5Item6Taxpayer"]').change(function(){
		// pg6Sched5Item6Taxpayer = getInt($('input[name="pg6Sched5Item6Taxpayer"]').val());
		
		pg2Item55Taxpayer = pg6Sched5Item6Taxpayer;
		
		$('input[name="pg2Item55Taxpayer"]').val(pg2Item55Taxpayer);
		$('input[name="pg2Item55Taxpayer"]').change();
	});
	
	$('input[name="pg6Sched5Item6Spouse"]').change(function(){
		// pg6Sched5Item6Spouse = getInt($('input[name="pg6Sched5Item6Spouse"]').val());
		
		pg2Item55Spouse = pg6Sched5Item6Spouse;
		
		$('input[name="pg2Item55Spouse"]').val(pg2Item55Spouse);
		$('input[name="pg2Item55Spouse"]').change();
	});
	
	//item56 sum of 54 & 55
	$('input[name="pg2Item54Taxpayer"], input[name="pg2Item55Taxpayer"]').change(function(){
		// pg2Item54Taxpayer = getInt($('input[name="pg2Item54Taxpayer"]').val());
		// pg2Item55Taxpayer = getInt($('input[name="pg2Item55Taxpayer"]').val());
		
		pg2Item56Taxpayer = pg2Item54Taxpayer + pg2Item55Taxpayer;
		
		$('input[name="pg2Item56Taxpayer"]').val(pg2Item56Taxpayer);
		$('input[name="pg2Item56Taxpayer"]').change();
	});
	$('input[name="pg2Item54Spouse"], input[name="pg2Item55Spouse"]').change(function(){
		// pg2Item54Spouse = getInt($('input[name="pg2Item54Spouse"]').val());
		// pg2Item55Spouse = getInt($('input[name="pg2Item55Spouse"]').val());
		
		pg2Item56Spouse = pg2Item54Spouse + pg2Item55Spouse;
		
		$('input[name="pg2Item56Spouse"]').val(pg2Item56Spouse);
		$('input[name="pg2Item56Spouse"]').change();
	});
	//item57 40a/40b
	
	$('input[name="pg7Sched6Item40Taxpayer"]').change(function(){
		// pg7Sched6Item40Taxpayer = getInt($('input[name="pg7Sched6Item40Taxpayer"]').val());
		
		pg2Item57Taxpayer = pg7Sched6Item40Taxpayer;
		
		$('input[name="pg2Item57Taxpayer"]').val(pg2Item57Taxpayer);
		$('input[name="pg2Item57Taxpayer"]').change();
	});
	
	$('input[name="pg7Sched6Item40Spouse"]').change(function(){
		// pg7Sched6Item40Spouse = getInt($('input[name="pg7Sched6Item40Spouse"]').val());
		
		pg2Item57Spouse = pg7Sched6Item40Spouse;
		
		$('input[name="pg2Item57Spouse"]').val(pg2Item57Spouse);
		$('input[name="pg2Item57Spouse"]').change();
	});
	//item58 sched7 5a/5b
	
	$('input[name="pg8Sched7Item5Taxpayer"]').change(function(){
		// pg8Sched7Item5Taxpayer = getInt($('input[name="pg8Sched7Item5Taxpayer"]').val());
		
		pg2Item58Taxpayer = pg8Sched7Item5Taxpayer;
		
		$('input[name="pg2Item58Taxpayer"]').val(pg2Item58Taxpayer);
		$('input[name="pg2Item58Taxpayer"]').change();
	});
	
	$('input[name="pg8Sched7Item5Spouse"]').change(function(){
		// pg8Sched7Item5Spouse = getInt($('input[name="pg8Sched7Item5Spouse"]').val());
		
		pg2Item58Spouse = pg8Sched7Item5Spouse;
		
		$('input[name="pg2Item58Spouse"]').val(pg2Item58Spouse);
		$('input[name="pg2Item58Spouse"]').change();
	});
	//item59 8a1 8d/ 8b1 8d
	//babalikan
	// $('input[name="inp1701textne2aP8"]').change(function(){
		// inp1701textne2aP8 = getInt($('input[name="inp1701textne2aP8"]').val());
		
		// pg2Item59Taxpayer = inp1701textne2aP8;
		
		// $('input[name="pg2Item59Taxpayer"]').val(pg2Item59Taxpayer);
		// $('input[name="pg2Item59Taxpayer"]').change();
	// });
	
	// $('input[name="pg8Sched7Item5Spouse"]').change(function(){
		// pg8Sched7Item5Spouse = getInt($('input[name="pg8Sched7Item5Spouse"]').val());
		
		// pg2Item59Spouse = pg8Sched7Item5Spouse;
		
		// $('input[name="pg2Item59Spouse"]').val(pg2Item59Spouse);
		// $('input[name="pg2Item59Spouse"]').change();
	// });
	
	//item60
	$('input[name="pg2Item57Taxpayer"], input[name="pg2Item58Taxpayer"], input[name="pg2Item59Taxpayer"]').change(function(){
		// pg2Item57Taxpayer = getInt($('input[name="pg2Item57Taxpayer"]').val());
		// pg2Item58Taxpayer = getInt($('input[name="pg2Item58Taxpayer"]').val());
		// pg2Item59Taxpayer = getInt($('input[name="pg2Item59Taxpayer"]').val());
		
		pg2Item60Taxpayer = pg2Item57Taxpayer + pg2Item58Taxpayer + pg2Item59Taxpayer;
		
		$('input[name="pg2Item60Taxpayer"]').val(pg2Item60Taxpayer);
		$('input[name="pg2Item60Taxpayer"]').change();
	});
	$('input[name="pg2Item57Spouse"], input[name="pg2Item58Spouse"], input[name="pg2Item59Spouse"]').change(function(){
		// pg2Item57Spouse = getInt($('input[name="pg2Item57Spouse"]').val());
		// pg2Item58Spouse = getInt($('input[name="pg2Item58Spouse"]').val());
		// pg2Item59Spouse = getInt($('input[name="pg2Item59Spouse"]').val());
		
		pg2Item60Spouse = pg2Item57Spouse + pg2Item58Spouse + pg2Item59Spouse;
		
		$('input[name="pg2Item60Spouse"]').val(pg2Item60Spouse);
		$('input[name="pg2Item60Spouse"]').change();
	});
	//item62
	$('input[name="pg2Item56Taxpayer"], input[name="pg2Item60Taxpayer"]').change(function(){
		// pg2Item56Taxpayer = getInt($('input[name="pg2Item56Taxpayer"]').val());
		// pg2Item60Taxpayer = getInt($('input[name="pg2Item60Taxpayer"]').val());
		
		pg2Item62Taxpayer = pg2Item56Taxpayer - pg2Item60Taxpayer;
		
		$('input[name="pg2Item62Taxpayer"]').val(pg2Item62Taxpayer);
		$('input[name="pg2Item62Taxpayer"]').change();
	});
	$('input[name="pg2Item56Spouse"], input[name="pg2Item60Spouse"]').change(function(){
		// pg2Item56Spouse = getInt($('input[name="pg2Item56Spouse"]').val());
		// pg2Item60Spouse = getInt($('input[name="pg2Item60Spouse"]').val());
		
		pg2Item62Spouse = pg2Item56Spouse - pg2Item60Spouse;
		
		$('input[name="pg2Item62Spouse"]').val(pg2Item62Spouse);
		$('input[name="pg2Item62Spouse"]').change();
	});
	//item63
	$('input[name="pg2Item48Taxpayer"]').change(function(){
		// pg2Item48Taxpayer = getInt($('input[name="pg2Item48Taxpayer"]').val());
		
		pg2Item63Taxpayer = pg2Item48Taxpayer;
		
		$('input[name="pg2Item63Taxpayer"]').val(pg2Item63Taxpayer);
		$('input[name="pg2Item63Taxpayer"]').change();
	});
	$('input[name="pg2Item48Spouse"]').change(function(){
		// pg2Item48Spouse = getInt($('input[name="pg2Item48Spouse"]').val());
		
		pg2Item63Spouse = pg2Item48Spouse;
		
		$('input[name="pg2Item63Spouse"]').val(pg2Item63Spouse);
		$('input[name="pg2Item63Spouse"]').change();
	});
	//item64
	$('input[name="pg2Item62Taxpayer"], input[name="pg2Item63Taxpayer"]').change(function(){
		// pg2Item62Taxpayer = getInt($('input[name="pg2Item62Taxpayer"]').val());
		// pg2Item63Taxpayer = getInt($('input[name="pg2Item63Taxpayer"]').val());
		
		pg2Item64Taxpayer = pg2Item62Taxpayer + pg2Item63Taxpayer;
		
		$('input[name="pg2Item64Taxpayer"]').val(pg2Item64Taxpayer);
		$('input[name="pg2Item64Taxpayer"]').change();
	});
	$('input[name="pg2Item62Spouse"], input[name="pg2Item63Spouse"]').change(function(){
		// pg2Item62Spouse = getInt($('input[name="pg2Item62Spouse"]').val());
		// pg2Item63Spouse = getInt($('input[name="pg2Item63Spouse"]').val());
		
		pg2Item64Spouse = pg2Item56Spouse + pg2Item60Spouse;
		
		$('input[name="pg2Item64Spouse"]').val(pg2Item64Spouse);
		$('input[name="pg2Item64Spouse"]').change();
	});
	
	//item65
	$('input[name="pg2Item47Taxpayer"]').change(function(){
		// pg2Item47Taxpayer = getInt($('input[name="pg2Item47Taxpayer"]').val());
		
		pg2Item65Taxpayer = pg2Item47Taxpayer;
		
		$('input[name="pg2Item65Taxpayer"]').val(pg2Item65Taxpayer);
		$('input[name="pg2Item65Taxpayer"]').change();
	});
	$('input[name="pg2Item47Spouse"]').change(function(){
		// pg2Item47Spouse = getInt($('input[name="pg2Item47Spouse"]').val());
		
		pg2Item65Spouse = pg2Item47Spouse;
		
		$('input[name="pg2Item65Spouse"]').val(pg2Item65Spouse);
		$('input[name="pg2Item65Spouse"]').change();
	});
	//item66
	$('input[name="pg2Item64Taxpayer"], input[name="pg2Item65Taxpayer"]').change(function(){
		// pg2Item64Taxpayer = getInt($('input[name="pg2Item64Taxpayer"]').val());
		// pg2Item65Taxpayer = getInt($('input[name="pg2Item65Taxpayer"]').val());
		
		pg2Item66Taxpayer = pg2Item64Taxpayer - pg2Item65Taxpayer;
		
		$('input[name="pg2Item66Taxpayer"]').val(pg2Item64Taxpayer);
		$('input[name="pg2Item66Taxpayer"]').change();
	});
	$('input[name="pg2Item64Spouse"], input[name="pg2Item65Spouse"]').change(function(){
		// pg2Item64Spouse = getInt($('input[name="pg2Item64Spouse"]').val());
		// pg2Item65Spouse = getInt($('input[name="pg2Item65Spouse"]').val());
		
		pg2Item66Spouse = pg2Item64Spouse - pg2Item65Spouse;
		
		$('input[name="pg2Item66Spouse"]').val(pg2Item66Spouse);
		$('input[name="pg2Item66Spouse"]').change();
	});
	//67wala pa 
	//page3 
	//item68
	$('input[name="pg2Item67Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg3Item68Taxpayer = pg2Item67Taxpayer;
		
		$('input[name="pg3Item68Taxpayer"]').val(pg3Item68Taxpayer);
		$('input[name="pg3Item68Taxpayer"]').change();
	});
	$('input[name="pg2Item67Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg3Item68Spouse = pg2Item67Spouse;
		
		$('input[name="pg3Item68Spouse"]').val(pg3Item68Spouse);
		$('input[name="pg3Item68Spouse"]').change();
	});
	//item69
	$('input[name="pg12Part9Item18b"]').change(function(){
		// pg12Part9Item18b = getInt($('input[name="pg12Part9Item18b"]').val());
		
		pg3Item69Taxpayer = pg12Part9Item18b;
		
		$('input[name="pg3Item69Taxpayer"]').val(pg3Item69Taxpayer);
		$('input[name="pg3Item69Taxpayer"]').change();
	});
	$('input[name="pg12Part9Item18f"]').change(function(){
		// pg12Part9Item18f = getInt($('input[name="pg12Part9Item18f"]').val());
		
		pg3Item69Spouse = pg12Part9Item18f;
		
		$('input[name="pg3Item69Spouse"]').val(pg3Item69Spouse);
		$('input[name="pg3Item69Spouse"]').change();
	});
	//item71
	$('input[name="pg3Item69Taxpayer"], input[name="pg3Item70Taxpayer"]').change(function(){
		// pg3Item69Taxpayer = getInt($('input[name="pg3Item69Taxpayer"]').val());
		// pg3Item70Taxpayer = getInt($('input[name="pg3Item70Taxpayer"]').val());
		
		pg3Item71Taxpayer = pg3Item69Taxpayer - pg3Item70Taxpayer ;
		
		$('input[name="pg3Item71Taxpayer"]').val(pg3Item71Taxpayer);
		$('input[name="pg3Item71Taxpayer"]').change();
	});
	$('input[name="pg3Item69Spouse"], input[name="pg3Item70Spouse"]').change(function(){
		// pg3Item69Spouse = getInt($('input[name="pg3Item69Spouse"]').val());
		// pg3Item70Spouse = getInt($('input[name="pg3Item70Spouse"]').val());
		
		pg3Item71Spouse = pg3Item69Spouse - pg3Item70Spouse ;
		
		$('input[name="pg3Item71Spouse"]').val(pg3Item71Spouse);
		$('input[name="pg3Item71Spouse"]').change();
	});
	//item72
	$('input[name="pg3Item68Taxpayer"], input[name="pg3Item71Taxpayer"]').change(function(){
		// pg3Item68Taxpayer = getInt($('input[name="pg3Item68Taxpayer"]').val());
		// pg3Item71Taxpayer = getInt($('input[name="pg3Item71Taxpayer"]').val());
		
		pg3Item72Taxpayer = pg3Item68Taxpayer + pg3Item71Taxpayer ;
		
		$('input[name="pg3Item72Taxpayer"]').val(pg3Item72Taxpayer);
		$('input[name="pg3Item72Taxpayer"]').change();
	});
	$('input[name="pg3Item68Spouse"], input[name="pg3Item71Spouse"]').change(function(){
		// pg3Item68Spouse = getInt($('input[name="pg3Item68Spouse"]').val());
		// pg3Item71Spouse = getInt($('input[name="pg3Item71Spouse"]').val());
		
		pg3Item72Spouse = pg3Item68Spouse + pg3Item71Spouse ;
		
		$('input[name="pg3Item72Spouse"]').val(pg3Item72Spouse);
		$('input[name="pg3Item72Spouse"]').change();
	});
	//item73
	$('input[name="pg9Sched9Item10Taxpayer"]').change(function(){
		// pg9Sched9Item10Taxpayer = getInt($('input[name="pg9Sched9Item10Taxpayer"]').val());
		
		pg3Item73Taxpayer = pg9Sched9Item10Taxpayer;
		
		$('input[name="pg3Item73Taxpayer"]').val(pg3Item73Taxpayer);
		$('input[name="pg3Item73Taxpayer"]').change();
	});
	$('input[name="pg9Sched9Item10Spouse"]').change(function(){
		// pg9Sched9Item10Spouse = getInt($('input[name="pg9Sched9Item10Spouse"]').val());
		
		pg3Item73Spouse = pg9Sched9Item10Spouse                                 ;
		
		$('input[name="pg3Item73Spouse"]').val(pg3Item73Spouse);
		$('input[name="pg3Item73Spouse"]').change();
	});
	//item74
	$('input[name="pg12Part9Item19b"]').change(function(){
		// pg12Part9Item19b = getInt($('input[name="pg12Part9Item19b"]').val());
		
		pg3Item74Taxpayer = pg12Part9Item19b;
		
		$('input[name="pg3Item74Taxpayer"]').val(pg3Item74Taxpayer);
		$('input[name="pg3Item74Taxpayer"]').change();
	});
	$('input[name="pg12Part9Item19f"]').change(function(){
		// pg12Part9Item19f = getInt($('input[name="pg12Part9Item19f"]').val());
		
		pg3Item74Spouse = pg12Part9Item19f                                 ;
		
		$('input[name="pg3Item74Spouse"]').val(pg3Item74Spouse);
		$('input[name="pg3Item74Spouse"]').change();
	});
	//item75
	$('input[name="pg12Part9Item19c"]').change(function(){
		// pg12Part9Item19c = getInt($('input[name="pg12Part9Item19c"]').val());
		
		pg3Item75Taxpayer = pg12Part9Item19c;
		
		$('input[name="pg3Item75Taxpayer"]').val(pg3Item75Taxpayer);
		$('input[name="pg3Item75Taxpayer"]').change();
	});
	$('input[name="pg12Part9Item19g"]').change(function(){
		// pg12Part9Item19g = getInt($(pg12Part9Item19g).val());
		
		pg3Item75Spouse = pg12Part9Item19g;
		
		$('input[name="pg3Item75Spouse"]').val(pg3Item75Spouse);
		$('input[name="pg3Item75Spouse"]').change();
	});
	//item76
	$('input[name="pg3Item73Taxpayer"], input[name="pg3Item74Taxpayer"], input[name="pg3Item75Taxpayer"]').change(function(){
		// pg3Item73Taxpayer = getInt($('input[name="pg3Item73Taxpayer"]').val());
		// pg3Item74Taxpayer = getInt($('input[name="pg3Item74Taxpayer"]').val());
		// pg3Item75Taxpayer = getInt($('input[name="pg3Item75Taxpayer"]').val());
		
		pg3Item76Taxpayer = pg3Item73Taxpayer + pg3Item74Taxpayer + pg3Item75Taxpayer;
		
		$('input[name="pg3Item76Taxpayer"]').val(pg3Item76Taxpayer);
		$('input[name="pg3Item76Taxpayer"]').change();
	});
	$('input[name="pg3Item73Spouse"], input[name="pg3Item74Spouse"], input[name="pg3Item75Spouse"]').change(function(){
		// pg3Item73Spouse = getInt($('input[name="pg3Item73Spouse"]').val());
		// pg3Item74Spouse = getInt($('input[name="pg3Item74Spouse"]').val());
		// pg3Item75Spouse = getInt($('input[name="pg3Item75Spouse"]').val());
		
		pg3Item76Spouse = pg3Item73Spouse + pg3Item74Spouse + pg3Item75Spouse;
		
		$('input[name="pg3Item76Spouse"]').val(pg3Item76Spouse);
		$('input[name="pg3Item76Spouse"]').change();
	});
	//item77
	$('input[name="pg3Item72Taxpayer"], input[name="pg3Item76Taxpayer" ]').change(function(){
		// pg3Item72Taxpayer = getInt($('input[name="pg3Item72Taxpayer"]').val());
		// pg3Item76Taxpayer = getInt($('input[name="pg3Item76Taxpayer"]').val());
		
		pg3Item77Taxpayer = pg3Item72Taxpayer - pg3Item76Taxpayer;
		
		$('input[name="pg3Item77Taxpayer"]').val(pg3Item77Taxpayer);
		$('input[name="pg3Item77Taxpayer"]').change();
	});
	$('input[name="pg3Item72Spouse"], input[name="pg3Item76Spouse"]').change(function(){
		// pg3Item72Spouse = getInt($('input[name="pg3Item72Spouse"]').val());
		// pg3Item76Spouse = getInt($('input[name="pg3Item76Spouse"]').val());
		
		pg3Item77Spouse = pg3Item72Spouse - pg3Item76Spouse;
		
		$('input[name="pg3Item77Spouse"]').val(pg3Item77Spouse);
		$('input[name="pg3Item77Spouse"]').change();
	});
	//item78
	$('input[name="pg3Item77Taxpayer"], input[name="pg3Item77Spouse" ]').change(function(){
		// pg3Item77Taxpayer = getInt($('input[name="pg3Item77Taxpayer"]').val());
		// pg3Item77Spouse = getInt($('input[name="pg3Item77Spouse"]').val());
		
		pg3Item78Spouse = pg3Item77Taxpayer + pg3Item77Spouse;
		
		$('input[name="pg3Item78Spouse"]').val(pg3Item78Spouse);
		$('input[name="pg3Item78Spouse"]').change();
	});
	//item79 wala pa
	// $('input[name="pg3Item77Taxpayer"], input[name="pg3Item77Spouse" ]').change(function(){
		// pg3Item77Taxpayer = getInt($('input[name="pg3Item77Taxpayer"]').val());
		// pg3Item77Spouse = getInt($('input[name="pg3Item77Spouse"]').val());
		
		// pg3Item78Spouse = pg3Item77Taxpayer + pg3Item77Spouse;
		
		// $('input[name="pg3Item78Spouse"]').val(pg3Item78Spouse);
		// $('input[name="pg3Item78Spouse"]').change();
	// });
	
	//item80
	$('input[name="pg3Item78Spouse"], input[name="pg3Item79Spouse" ]').change(function(){
		// pg3Item78Spouse = getInt($('input[name="pg3Item78Spouse"]').val());
		// pg3Item79Spouse = getInt($('input[name="pg3Item79Spouse"]').val());
		
		pg3Item80Spouse = pg3Item78Spouse - pg3Item79Spouse;
		
		$('input[name="pg3Item80Spouse"]').val(pg3Item80Spouse);
		$('input[name="pg3Item80Spouse"]').change();
	});
	
	//item84
	$('input[name="pg3Item81Spouse"], input[name="pg3Item82Spouse" ], input[name="pg3Item83Spouse" ]').change(function(){
		// pg3Item81Spouse = getInt($('input[name="pg3Item81Spouse"]').val());
		// pg3Item82Spouse = getInt($('input[name="pg3Item82Spouse"]').val());
		// pg3Item83Spouse = getInt($('input[name="pg3Item83Spouse"]').val());
		
		pg3Item84Spouse = pg3Item81Spouse + pg3Item82Spouse + pg3Item83Spouse;
		
		$('input[name="pg3Item84Spouse"]').val(pg3Item84Spouse);
		$('input[name="pg3Item84Spouse"]').change();
	});
	
	//item85
	$('input[name="pg3Item80Spouse"], input[name="pg3Item84Spouse" ]').change(function(){
		// pg3Item80Spouse = getInt($('input[name="pg3Item80Spouse"]').val());
		// pg3Item84Spouse = getInt($('input[name="pg3Item84Spouse"]').val());
		
		pg3Item85Spouse = pg3Item80Spouse + pg3Item84Spouse;
		
		$('input[name="pg3Item85Spouse"]').val(pg3Item84Spouse);
		$('input[name="pg3Item85Spouse"]').change();
	});
	
	//86 wala pa
	
	//87
	$('input[name="pg2Item67Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg3Item87Taxpayer = pg2Item67Taxpayer;
		
		$('input[name="pg3Item87Taxpayer"]').val(pg3Item87Taxpayer);
		$('input[name="pg3Item87Taxpayer"]').change();
	});
	
	$('input[name="pg2Item67Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg3Item87Spouse = pg2Item67Spouse;
		
		$('input[name="pg3Item87Spouse"]').val(pg3Item87Spouse);
		$('input[name="pg3Item87Spouse"]').change();
	});
	//88
	$('input[name="pg3Item86Taxpayer"], input[name="pg3Item87Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg3Item88Taxpayer = pg3Item86Taxpayer - pg3Item87Taxpayer;
		
		$('input[name="pg3Item88Taxpayer"]').val(pg3Item88Taxpayer);
		$('input[name="pg3Item88Taxpayer"]').change();
	});
	
	$('input[name="pg3Item86Spouse"], input[name="pg3Item87Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg3Item88Spouse = pg3Item86Spouse - pg3Item87Spouse;
		
		$('input[name="pg3Item88Spouse"]').val(pg3Item88Spouse);
		$('input[name="pg3Item88Spouse"]').change();
	});
	//89
	$('input[name="pg9Sched9Item8Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg3Item89Taxpayer = pg9Sched9Item8Taxpayer;
		
		$('input[name="pg3Item89Taxpayer"]').val(pg3Item89Taxpayer);
		$('input[name="pg3Item89Taxpayer"]').change();
	});
	
	$('input[name="pg9Sched9Item8Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg3Item89Spouse = pg9Sched9Item8Spouse;
		
		$('input[name="pg3Item89Spouse"]').val(pg3Item89Spouse);
		$('input[name="pg3Item89Spouse"]').change();
	});
	//90
	$('input[name="pg3Item88Taxpayer"], input[name="pg3Item89Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg3Item90Taxpayer = pg3Item88Taxpayer + pg3Item89Taxpayer;
		
		$('input[name="pg3Item90Taxpayer"]').val(pg3Item90Taxpayer);
		$('input[name="pg3Item90Taxpayer"]').change();
	});
	
	$('input[name="pg3Item88Spouse"], input[name="pg3Item89Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg3Item90Spouse = pg3Item88Spouse + pg3Item89Spouse;
		
		$('input[name="pg3Item90Spouse"]').val(pg3Item90Spouse);
		$('input[name="pg3Item90Spouse"]').change();
	});
	//91
	$('input[name="pg12Part9Item21b"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg3Item91Taxpayer = pg12Part9Item21b;
		
		$('input[name="pg3Item91Taxpayer"]').val(pg3Item91Taxpayer);
		$('input[name="pg3Item91Taxpayer"]').change();
	});
	
	$('input[name="pg12Part9Item21f"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg3Item91Spouse = pg12Part9Item21f;
		
		$('input[name="pg3Item91Spouse"]').val(pg3Item91Spouse);
		$('input[name="pg3Item91Spouse"]').change();
	});
	//92
	$('input[name="pg12Part9Item21c"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg3Item92Taxpayer = pg12Part9Item21c;
		
		$('input[name="pg3Item92Taxpayer"]').val(pg3Item92Taxpayer);
		$('input[name="pg3Item92Taxpayer"]').change();
	});
	
	$('input[name="pg12Part9Item21g"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg3Item92Spouse = pg12Part9Item21g;
		
		$('input[name="pg3Item92Spouse"]').val(pg3Item92Spouse);
		$('input[name="pg3Item92Spouse"]').change();
	});
	//93
	$('input[name="pg3Item90Taxpayer"], input[name="pg3Item91Taxpayer"], input[name="pg3Item92Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg3Item93Taxpayer = pg3Item90Taxpayer + pg3Item91Taxpayer + pg3Item92Taxpayer;
		
		$('input[name="pg3Item93Taxpayer"]').val(pg3Item93Taxpayer);
		$('input[name="pg3Item93Taxpayer"]').change();
	});
	$('input[name="pg3Item90Spouse"], input[name="pg3Item91Spouse"], input[name="pg3Item92Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg3Item93Spouse = pg3Item90Spouse + pg3Item91Spouse + pg3Item92Spouse;
		
		$('input[name="pg3Item93Spouse"]').val(pg3Item93Spouse);
		$('input[name="pg3Item93Spouse"]').change();
	});
	//94
	$('input[name="pg3Item93Taxpayer"], input[name="pg3Item93Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg3Item94Spouse = pg3Item93Taxpayer + pg3Item93Spouse;
		
		$('input[name="pg3Item94Spouse"]').val(pg3Item94Spouse);
		$('input[name="pg3Item94Spouse"]').change();
	});
	//p5Sched2Item3
	$('input[name="pg5Sched2Item1Taxpayer"], input[name="pg5Sched2Item2Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg5Sched2Item3Taxpayer = pg5Sched2Item1Taxpayer + pg5Sched2Item2Taxpayer;
		
		$('input[name="pg5Sched2Item3Taxpayer"]').val(pg5Sched2Item3Taxpayer);
		$('input[name="pg5Sched2Item3Taxpayer"]').change();
	});
	$('input[name="pg5Sched2Item1Spouse"], input[name="pg5Sched2Item2Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg5Sched2Item3Spouse = pg5Sched2Item1Spouse + pg5Sched2Item2Spouse;
		
		$('input[name="pg5Sched2Item3Spouse"]').val(pg5Sched2Item3Spouse);
		$('input[name="pg5Sched2Item3Spouse"]').change();
	});
	//p5Sched3Item3
	$('input[name="pg5Sched3Item1Taxpayer"], input[name="pg5Sched3Item2Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg5Sched3Item3Taxpayer = pg5Sched3Item1Taxpayer + pg5Sched3Item2Taxpayer;
		
		$('input[name="pg5Sched3Item3Taxpayer"]').val(pg5Sched3Item3Taxpayer);
		$('input[name="pg5Sched3Item3Taxpayer"]').change();
	});
	$('input[name="pg5Sched3Item1Spouse"], input[name="pg5Sched3Item2Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg5Sched3Item3Spouse = pg5Sched3Item1Spouse + pg5Sched3Item2Spouse;
		
		$('input[name="pg5Sched3Item3Spouse"]').val(pg5Sched3Item3Spouse);
		$('input[name="pg5Sched3Item3Spouse"]').change();
	});
	//p5Sched4AItem3
	$('input[name="pg5Sched4Item1Taxpayer"], input[name="pg5Sched4Item2Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg5Sched4Item3Taxpayer = pg5Sched4Item1Taxpayer + pg5Sched4Item2Taxpayer;
		
		$('input[name="pg5Sched4Item3Taxpayer"]').val(pg5Sched4Item3Taxpayer);
		$('input[name="pg5Sched4Item3Taxpayer"]').change();
	});
	$('input[name="pg5Sched4Item1Spouse"], input[name="pg5Sched4Item2Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg5Sched4Item3Spouse = pg5Sched4Item1Spouse + pg5Sched4Item2Spouse;
		
		$('input[name="pg5Sched4Item3Spouse"]').val(pg5Sched4Item3Spouse);
		$('input[name="pg5Sched4Item3Spouse"]').change();
	});
	//p5Sched4AItem5
	$('input[name="pg5Sched4Item3Taxpayer"], input[name="pg5Sched4Item4Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg5Sched4Item5Taxpayer = pg5Sched4Item3Taxpayer - pg5Sched4Item4Taxpayer;
		
		$('input[name="pg5Sched4Item5Taxpayer"]').val(pg5Sched4Item5Taxpayer);
		$('input[name="pg5Sched4Item5Taxpayer"]').change();
	});
	$('input[name="pg5Sched4Item3Spouse"], input[name="pg5Sched4Item4Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg5Sched4Item5Spouse = pg5Sched4Item3Spouse - pg5Sched4Item4Spouse;
		
		$('input[name="pg5Sched4Item5Spouse"]').val(pg5Sched4Item5Spouse);
		$('input[name="pg5Sched4Item5Spouse"]').change();
	});
	//p6Sched4BItem8
	$('input[name="pg6Sched4bItem6Taxpayer"], input[name="pg6Sched4bItem7Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4bItem8Taxpayer = pg6Sched4bItem6Taxpayer + pg6Sched4bItem7Taxpayer;
		
		$('input[name="pg6Sched4bItem8Taxpayer"]').val(pg6Sched4bItem8Taxpayer);
		$('input[name="pg6Sched4bItem8Taxpayer"]').change();
	});
	$('input[name="pg6Sched4bItem6Spouse"], input[name="pg6Sched4bItem7Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4bItem8Spouse = pg6Sched4bItem6Spouse + pg6Sched4bItem7Spouse;
		
		$('input[name="pg6Sched4bItem8Spouse"]').val(pg6Sched4bItem8Spouse);
		$('input[name="pg6Sched4bItem8Spouse"]').change();
	});
	//p6Sched4BItem10
	$('input[name="pg6Sched4bItem8Taxpayer"], input[name="pg6Sched4bItem9Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4bItem10Taxpayer = pg6Sched4bItem8Taxpayer - pg6Sched4bItem9Taxpayer;
		
		$('input[name="pg6Sched4bItem10Taxpayer"]').val(pg6Sched4bItem10Taxpayer);
		$('input[name="pg6Sched4bItem10Taxpayer"]').change();
	});
	$('input[name="pg6Sched4bItem8Spouse"], input[name="pg6Sched4bItem9Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4bItem10Spouse = pg6Sched4bItem8Spouse - pg6Sched4bItem9Spouse;
		
		$('input[name="pg6Sched4bItem10Spouse"]').val(pg6Sched4bItem10Spouse);
		$('input[name="pg6Sched4bItem10Spouse"]').change();
	});
	//p6Sched4BItem10
	$('input[name="pg6Sched4bItem10Taxpayer"], input[name="pg6Sched4bItem11Taxpayer"], input[name="pg6Sched4bItem12Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4bItem13Taxpayer = pg6Sched4bItem10Taxpayer + pg6Sched4bItem11Taxpayer + pg6Sched4bItem12Taxpayer;
		
		$('input[name="pg6Sched4bItem13Taxpayer"]').val(pg6Sched4bItem13Taxpayer);
		$('input[name="pg6Sched4bItem13Taxpayer"]').change();
	});
	$('input[name="pg6Sched4bItem10Spouse"], input[name="pg6Sched4bItem11Spouse"], input[name="pg6Sched4bItem12Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4bItem13Spouse = pg6Sched4bItem10Spouse + pg6Sched4bItem11Spouse + pg6Sched4bItem12Spouse;
		
		$('input[name="pg6Sched4bItem13Spouse"]').val(pg6Sched4bItem13Spouse);
		$('input[name="pg6Sched4bItem13Spouse"]').change();
	});
	//p6Sched4BItem16
	$('input[name="pg6Sched4bItem13Taxpayer"], input[name="pg6Sched4bItem14Taxpayer"], input[name="pg6Sched4bItem15Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4bItem16Taxpayer = (pg6Sched4bItem13Taxpayer + pg6Sched4bItem14Taxpayer) - pg6Sched4bItem15Taxpayer;
		
		$('input[name="pg6Sched4bItem16Taxpayer"]').val(pg6Sched4bItem16Taxpayer);
		$('input[name="pg6Sched4bItem16Taxpayer"]').change();
	});
	$('input[name="pg6Sched4bItem13Spouse"], input[name="pg6Sched4bItem14Spouse"], input[name="pg6Sched4bItem15Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4bItem16Spouse = (pg6Sched4bItem13Spouse + pg6Sched4bItem14Spouse) - pg6Sched4bItem15Spouse;
		
		$('input[name="pg6Sched4bItem16Spouse"]').val(pg6Sched4bItem16Spouse);
		$('input[name="pg6Sched4bItem16Spouse"]').change();
	});
	//p6Sched4BItem19
	$('input[name="pg6Sched4bItem16Taxpayer"], input[name="pg6Sched4bItem17Taxpayer"], input[name="pg6Sched4bItem18Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4bItem19Taxpayer = (pg6Sched4bItem16Taxpayer + pg6Sched4bItem17Taxpayer) - pg6Sched4bItem18Taxpayer;
		
		$('input[name="pg6Sched4bItem19Taxpayer"]').val(pg6Sched4bItem19Taxpayer);
		$('input[name="pg6Sched4bItem19Taxpayer"]').change();
	});
	$('input[name="pg6Sched4bItem16Spouse"], input[name="pg6Sched4bItem17Spouse"], input[name="pg6Sched4bItem18Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4bItem19Spouse = (pg6Sched4bItem16Spouse + pg6Sched4bItem17Spouse) - pg6Sched4bItem18Spouse;
		
		$('input[name="pg6Sched4bItem19Spouse"]').val(pg6Sched4bItem19Spouse);
		$('input[name="pg6Sched4bItem19Spouse"]').change();
	});
	//p6Sched4BItem26
	$('input[name="pg6Sched4cItem20Taxpayer"], input[name="pg6Sched4cItem21Taxpayer"], input[name="pg6Sched4cItem22Taxpayer"], input[name="pg6Sched4cItem23Taxpayer"], input[name="pg6Sched4cItem24Taxpayer"], input[name="pg6Sched4cItem25Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4cItem26Taxpayer = pg6Sched4cItem20Taxpayer + pg6Sched4cItem21Taxpayer + pg6Sched4cItem22Taxpayer + pg6Sched4cItem23Taxpayer 
									+ pg6Sched4cItem24Taxpayer + pg6Sched4cItem25Taxpayer;
		
		$('input[name="pg6Sched4cItem26Taxpayer"]').val(pg6Sched4cItem26Taxpayer);
		$('input[name="pg6Sched4cItem26Taxpayer"]').change();
	});
	$('input[name="pg6Sched4cItem20Spouse"], input[name="pg6Sched4cItem21Spouse"], input[name="pg6Sched4cItem22Spouse"], input[name="pg6Sched4cItem23Spouse"], input[name="pg6Sched4cItem24Spouse"], input[name="pg6Sched4cItem25Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4cItem26Spouse = pg6Sched4cItem20Spouse + pg6Sched4cItem21Spouse + pg6Sched4cItem22Spouse + pg6Sched4cItem23Spouse 
									+ pg6Sched4cItem24Spouse + pg6Sched4cItem25Spouse;
		
		$('input[name="pg6Sched4cItem26Spouse"]').val(pg6Sched4cItem26Spouse);
		$('input[name="pg6Sched4cItem26Spouse"]').change();
	});
	//p6Sched4CItem27
	$('input[name="pg5Sched4Item5Taxpayer"], input[name="pg6Sched4bItem19Taxpayer"], input[name="pg6Sched4cItem26Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4cItem27Taxpayer = pg5Sched4Item5Taxpayer + pg6Sched4bItem19Taxpayer + pg6Sched4cItem26Taxpayer;
		
		$('input[name="pg6Sched4cItem27Taxpayer"]').val(pg6Sched4cItem27Taxpayer);
		$('input[name="pg6Sched4cItem27Taxpayer"]').change();
	});
	$('input[name="pg5Sched4Item5Spouse"], input[name="pg6Sched4bItem19Spouse"], input[name="pg6Sched4cItem26Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched4cItem27Spouse = pg5Sched4Item5Spouse + pg6Sched4bItem19Spouse + pg6Sched4cItem26Spouse;
		
		$('input[name="pg6Sched4cItem27Spouse"]').val(pg6Sched4cItem27Spouse);
		$('input[name="pg6Sched4cItem27Spouse"]').change();
	});
	//p6Sched5Item6
	$('input[name="pg6Sched5Item1Taxpayer"], input[name="pg6Sched5Item2Taxpayer"], input[name="pg6Sched5Item3Taxpayer"], input[name="pg6Sched5Item4Taxpayer"], input[name="pg6Sched5Item5Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched5Item6Taxpayer = pg6Sched5Item1Taxpayer + pg6Sched5Item2Taxpayer + pg6Sched5Item3Taxpayer + pg6Sched5Item4Taxpayer + pg6Sched5Item5Taxpayer;
		
		$('input[name="pg6Sched5Item6Taxpayer"]').val(pg6Sched5Item6Taxpayer);
		$('input[name="pg6Sched5Item6Taxpayer"]').change();
	});
	$('input[name="pg6Sched5Item1Spouse"], input[name="pg6Sched5Item2Spouse"], input[name="pg6Sched5Item3Spouse"], input[name="pg6Sched5Item4Spouse"], input[name="pg6Sched5Item5Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg6Sched5Item6Spouse = pg6Sched5Item1Spouse + pg6Sched5Item2Spouse + pg6Sched5Item3Spouse + pg6Sched5Item4Spouse + pg6Sched5Item5Spouse;
		
		$('input[name="pg6Sched5Item6Spouse"]').val(pg6Sched5Item6Spouse);
		$('input[name="pg6Sched5Item6Spouse"]').change();
	});
	//p7Sched6Item40
	$('input[name="pg6Sched6Item1Taxpayer"], input[name="pg6Sched6Item2Taxpayer"], input[name="pg6Sched6Item3Taxpayer"], input[name="pg6Sched6Item4Taxpayer"], input[name="pg7Sched6Item5Taxpayer"], input[name="pg7Sched6Item6Taxpayer"], input[name="pg7Sched6Item7Taxpayer"], input[name="pg7Sched6Item8Taxpayer"], input[name="pg7Sched6Item9Taxpayer"], input[name="pg7Sched6Item10Taxpayer"], input[name="pg7Sched6Item11Taxpayer"], input[name="pg7Sched6Item12Taxpayer"], input[name="pg7Sched6Item13Taxpayer"], input[name="pg7Sched6Item14Taxpayer"], input[name="pg7Sched6Item15Taxpayer"], input[name="pg7Sched6Item16Taxpayer"], input[name="pg7Sched6Item17Taxpayer"], input[name="pg7Sched6Item18Taxpayer"], input[name="pg7Sched6Item19Taxpayer"], input[name="pg7Sched6Item20Taxpayer"], input[name="pg7Sched6Item21Taxpayer"], input[name="pg7Sched6Item22Taxpayer"], input[name="pg7Sched6Item23Taxpayer"], input[name="pg7Sched6Item24Taxpayer"], input[name="pg7Sched6Item25Taxpayer"], input[name="pg7Sched6Item26Taxpayer"], input[name="pg7Sched6Item27Taxpayer"], input[name="pg7Sched6Item28Taxpayer"], input[name="pg7Sched6Item29Taxpayer"], input[name="pg7Sched6Item30Taxpayer"], input[name="pg7Sched6Item31Taxpayer"], input[name="pg7Sched6Item32Taxpayer"], input[name="pg7Sched6Item33Taxpayer"], input[name="pg7Sched6Item34Taxpayer"], input[name="pg7Sched6Item35Taxpayer"], input[name="pg7Sched6Item36Taxpayer"], input[name="pg7Sched6Item37Taxpayer"], input[name="pg7Sched6Item38Taxpayer"], input[name="pg7Sched6Item39Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg7Sched6Item40Taxpayer = pg6Sched6Item1Taxpayer + pg6Sched6Item2Taxpayer + pg6Sched6Item3Taxpayer + pg6Sched6Item4Taxpayer + pg7Sched6Item5Taxpayer + pg7Sched6Item6Taxpayer + pg7Sched6Item7Taxpayer + pg7Sched6Item8Taxpayer + pg7Sched6Item9Taxpayer + pg7Sched6Item10Taxpayer + pg7Sched6Item11Taxpayer + pg7Sched6Item12Taxpayer + pg7Sched6Item13Taxpayer + pg7Sched6Item14Taxpayer + pg7Sched6Item15Taxpayer + pg7Sched6Item16Taxpayer + pg7Sched6Item17Taxpayer + pg7Sched6Item18Taxpayer + pg7Sched6Item19Taxpayer + pg7Sched6Item20Taxpayer + pg7Sched6Item21Taxpayer + pg7Sched6Item22Taxpayer + pg7Sched6Item23Taxpayer + pg7Sched6Item24Taxpayer + pg7Sched6Item25Taxpayer + pg7Sched6Item26Taxpayer + pg7Sched6Item27Taxpayer + pg7Sched6Item28Taxpayer + pg7Sched6Item29Taxpayer + pg7Sched6Item30Taxpayer + pg7Sched6Item31Taxpayer + pg7Sched6Item32Taxpayer + pg7Sched6Item33Taxpayer + pg7Sched6Item34Taxpayer + pg7Sched6Item35Taxpayer + pg7Sched6Item36Taxpayer + pg7Sched6Item37Taxpayer + pg7Sched6Item38Taxpayer + pg7Sched6Item39Taxpayer;
		
		$('input[name="pg7Sched6Item40Taxpayer"]').val(pg7Sched6Item40Taxpayer);
		$('input[name="pg7Sched6Item40Taxpayer"]').change();
	});
	$('input[name="pg6Sched6Item1Spouse"], input[name="pg6Sched6Item2Spouse"], input[name="pg6Sched6Item3Spouse"], input[name="pg6Sched6Item4Spouse"], input[name="pg7Sched6Item5Spouse"], input[name="pg7Sched6Item6Spouse"], input[name="pg7Sched6Item7Spouse"], input[name="pg7Sched6Item8Spouse"], input[name="pg7Sched6Item9Spouse"], input[name="pg7Sched6Item10Spouse"], input[name="pg7Sched6Item11Spouse"], input[name="pg7Sched6Item12Spouse"], input[name="pg7Sched6Item13Spouse"], input[name="pg7Sched6Item14Spouse"], input[name="pg7Sched6Item15Spouse"], input[name="pg7Sched6Item16Spouse"], input[name="pg7Sched6Item17Spouse"], input[name="pg7Sched6Item18Spouse"], input[name="pg7Sched6Item19Spouse"], input[name="pg7Sched6Item20Spouse"], input[name="pg7Sched6Item21Spouse"], input[name="pg7Sched6Item22Spouse"], input[name="pg7Sched6Item23Spouse"], input[name="pg7Sched6Item24Spouse"], input[name="pg7Sched6Item25Spouse"], input[name="pg7Sched6Item26Spouse"], input[name="pg7Sched6Item27Spouse"], input[name="pg7Sched6Item28Spouse"], input[name="pg7Sched6Item29Spouse"], input[name="pg7Sched6Item30Spouse"], input[name="pg7Sched6Item31Spouse"], input[name="pg7Sched6Item32Spouse"], input[name="pg7Sched6Item33Spouse"], input[name="pg7Sched6Item34Spouse"], input[name="pg7Sched6Item35Spouse"], input[name="pg7Sched6Item36Spouse"], input[name="pg7Sched6Item37Spouse"], input[name="pg7Sched6Item38Spouse"], input[name="pg7Sched6Item39Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg7Sched6Item40Spouse = pg6Sched6Item1Spouse + pg6Sched6Item2Spouse + pg6Sched6Item3Spouse + pg6Sched6Item4Spouse + pg7Sched6Item5Spouse + pg7Sched6Item6Spouse + pg7Sched6Item7Spouse + pg7Sched6Item8Spouse + pg7Sched6Item9Spouse + pg7Sched6Item10Spouse + pg7Sched6Item11Spouse + pg7Sched6Item12Spouse + pg7Sched6Item13Spouse + pg7Sched6Item14Spouse + pg7Sched6Item15Spouse + pg7Sched6Item16Spouse + pg7Sched6Item17Spouse + pg7Sched6Item18Spouse + pg7Sched6Item19Spouse + pg7Sched6Item20Spouse + pg7Sched6Item21Spouse + pg7Sched6Item22Spouse + pg7Sched6Item23Spouse + pg7Sched6Item24Spouse + pg7Sched6Item25Spouse + pg7Sched6Item26Spouse + pg7Sched6Item27Spouse + pg7Sched6Item28Spouse + pg7Sched6Item29Spouse + pg7Sched6Item30Spouse + pg7Sched6Item31Spouse + pg7Sched6Item32Spouse + pg7Sched6Item33Spouse + pg7Sched6Item34Spouse + pg7Sched6Item35Spouse + pg7Sched6Item36Spouse + pg7Sched6Item37Spouse + pg7Sched6Item38Spouse + pg7Sched6Item39Spouse;
		
		$('input[name="pg7Sched6Item40Spouse"]').val(pg7Sched6Item40Spouse);
		$('input[name="pg7Sched6Item40Spouse"]').change();
	});
	
	//p8Sched7Item5
	$('input[name="pg8Sched7Item1Taxpayer"], input[name="pg8Sched7Item2Taxpayer"], input[name="pg8Sched7Item3Taxpayer"], input[name="pg8Sched7Item4Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg8Sched7Item5Taxpayer = pg8Sched7Item1Taxpayer + pg8Sched7Item2Taxpayer + pg8Sched7Item3Taxpayer + pg8Sched7Item4Taxpayer;
		
		$('input[name="pg8Sched7Item5Taxpayer"]').val(pg8Sched7Item5Taxpayer);
		$('input[name="pg8Sched7Item5Taxpayer"]').change();
	});
	$('input[name="pg8Sched7Item1Spouse"], input[name="pg8Sched7Item2Spouse"], input[name="pg8Sched7Item3Spouse"], input[name="pg8Sched7Item4Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg8Sched7Item5Spouse = pg8Sched7Item1Spouse + pg8Sched7Item2Spouse + pg8Sched7Item3Spouse + pg8Sched7Item4Spouse;
		
		$('input[name="pg8Sched7Item5Spouse"]').val(pg8Sched7Item5Spouse);
		$('input[name="pg8Sched7Item5Spouse"]').change();
	});
	
	//p8Sched8AItem3
	$('input[name="pg8Sched8aItem1Taxpayer"], input[name="pg8Sched8aItem2Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg8Sched8aItem3Taxpayer = pg8Sched8aItem1Taxpayer - pg8Sched8aItem2Taxpayer;
		
		$('input[name="pg8Sched8aItem3Taxpayer"]').val(pg8Sched8aItem3Taxpayer);
		$('input[name="pg8Sched8aItem3Taxpayer"]').change();
	});
	
	//p8Sched8A.1Item8
	$('input[name="pg8Sched8a1Item4D"], input[name="pg8Sched8a1Item5D"], input[name="pg8Sched8a1Item6D"], input[name="pg8Sched8a1Item7D"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg8Sched8a1Item8 = pg8Sched8a1Item4D + pg8Sched8a1Item5D + pg8Sched8a1Item6D + pg8Sched8a1Item7D;
		
		$('input[name="pg8Sched8a1Item8"]').val(pg8Sched8a1Item8);
		$('input[name="pg8Sched8a1Item8"]').change();
	});
	
	//p8Sched8BItem3
	$('input[name="pg8Sched8aItem1Spouse"], input[name="pg8Sched8aItem2Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg8Sched8aItem3Spouse = pg8Sched8aItem1Spouse - pg8Sched8aItem2Spouse;
		
		$('input[name="pg8Sched8aItem3Spouse"]').val(pg8Sched8aItem3Spouse);
		$('input[name="pg8Sched8aItem3Spouse"]').change();
	});
	
	//p8Sched8B.1Item8
	$('input[name="pg8Sched8b1Item4D"], input[name="pg8Sched8b1Item5D"], input[name="pg8Sched8b1Item6D"], input[name="pg8Sched8b1Item7D"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg8Sched8b1Item8 = pg8Sched8b1Item4D + pg8Sched8b1Item5D + pg8Sched8b1Item6D + pg8Sched8b1Item7D;
		
		$('input[name="pg8Sched8b1Item8"]').val(pg8Sched8b1Item8);
		$('input[name="pg8Sched8b1Item8"]').change();
	});
	
	//p9Sched9Item10
	$('input[name="pg9Sched9Item1Taxpayer"], input[name="pg9Sched9Item2Taxpayer"], input[name="pg9Sched9Item3Taxpayer"], input[name="pg9Sched9Item4Taxpayer"], input[name="pg9Sched9Item5Taxpayer"], input[name="pg9Sched9Item6Taxpayer"], input[name="pg9Sched9Item7Taxpayer"], input[name="pg9Sched9Item8Taxpayer"], input[name="pg9Sched9Item9Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg9Sched9Item10Taxpayer = pg9Sched9Item1Taxpayer + pg9Sched9Item2Taxpayer + pg9Sched9Item3Taxpayer + pg9Sched9Item4Taxpayer + pg9Sched9Item5Taxpayer + pg9Sched9Item6Taxpayer + pg9Sched9Item7Taxpayer + pg9Sched9Item8Taxpayer + pg9Sched9Item9Taxpayer;
		
		$('input[name="pg9Sched9Item10Taxpayer"]').val(pg9Sched9Item10Taxpayer);
		$('input[name="pg9Sched9Item10Taxpayer"]').change();
	});
	$('input[name="pg9Sched9Item1Spouse"], input[name="pg9Sched9Item2Spouse"], input[name="pg9Sched9Item3Spouse"], input[name="pg9Sched9Item4Spouse"], input[name="pg9Sched9Item5Spouse"], input[name="pg9Sched9Item6Spouse"], input[name="pg9Sched9Item7Spouse"], input[name="pg9Sched9Item8Spouse"], input[name="pg9Sched9Item9Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg9Sched9Item10Spouse = pg9Sched9Item1Spouse + pg9Sched9Item2Spouse + pg9Sched9Item3Spouse + pg9Sched9Item4Spouse + pg9Sched9Item5Spouse + pg9Sched9Item6Spouse + pg9Sched9Item7Spouse + pg9Sched9Item8Spouse + pg9Sched9Item9Spouse;
		
		$('input[name="pg9Sched9Item10Spouse"]').val(pg9Sched9Item10Spouse);
		$('input[name="pg9Sched9Item10Spouse"]').change();
	});
	
	//p9Sched10Item7
	$('input[name="pg9Sched10Item1Taxpayer"], input[name="pg9Sched10Item2Taxpayer"], input[name="pg9Sched10Item3Taxpayer"], input[name="pg9Sched10Item4Taxpayer"], input[name="pg9Sched10Item5Taxpayer"], input[name="pg9Sched10Item6Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg9Sched10Item7Taxpayer = pg9Sched10Item1Taxpayer + pg9Sched10Item2Taxpayer + pg9Sched10Item3Taxpayer + pg9Sched10Item4Taxpayer + pg9Sched10Item5Taxpayer + pg9Sched10Item6Taxpayer;
		
		$('input[name="pg9Sched10Item7Taxpayer"]').val(pg9Sched10Item7Taxpayer);
		$('input[name="pg9Sched10Item7Taxpayer"]').change();
	});
	$('input[name="pg9Sched10Item1Spouse"], input[name="pg9Sched10Item2Spouse"], input[name="pg9Sched10Item3Spouse"], input[name="pg9Sched10Item4Spouse"], input[name="pg9Sched10Item5Spouse"], input[name="pg9Sched10Item6Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg9Sched10Item7Spouse = pg9Sched10Item1Spouse + pg9Sched10Item2Spouse + pg9Sched10Item3Spouse + pg9Sched10Item4Spouse + pg9Sched10Item5Spouse + pg9Sched10Item6Spouse;
		
		$('input[name="pg9Sched10Item7Spouse"]').val(pg9Sched10Item7Spouse);
		$('input[name="pg9Sched10Item7Spouse"]').change();
	});
	
	//p9Sched10Item12
	$('input[name="pg9Sched10Item8Taxpayer"], input[name="pg9Sched10Item9Taxpayer"], input[name="pg9Sched10Item10Taxpayer"], input[name="pg9Sched10Item11Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg9Sched10Item12Taxpayer = pg9Sched10Item8Taxpayer + pg9Sched10Item9Taxpayer + pg9Sched10Item10Taxpayer + pg9Sched10Item11Taxpayer;
		
		$('input[name="pg9Sched10Item12Taxpayer"]').val(pg9Sched10Item12Taxpayer);
		$('input[name="pg9Sched10Item12Taxpayer"]').change();
	});
	$('input[name="pg9Sched10Item8Spouse"], input[name="pg9Sched10Item9Spouse"], input[name="pg9Sched10Item10Spouse"], input[name="pg9Sched10Item11Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg9Sched10Item12Spouse = pg9Sched10Item8Spouse + pg9Sched10Item9Spouse + pg9Sched10Item10Spouse + pg9Sched10Item11Spouse;
		
		$('input[name="pg9Sched10Item12Spouse"]').val(pg9Sched10Item12Spouse);
		$('input[name="pg9Sched10Item12Spouse"]').change();
	});
	
	//p9Sched10Item16
	$('input[name="pg9Sched10Item13Taxpayer"], input[name="pg9Sched10Item14Taxpayer"], input[name="pg9Sched10Item15Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg9Sched10Item16Taxpayer = (pg9Sched10Item13Taxpayer + pg9Sched10Item14Taxpayer) - pg9Sched10Item15Taxpayer;
		
		$('input[name="pg9Sched10Item16Taxpayer"]').val(pg9Sched10Item16Taxpayer);
		$('input[name="pg9Sched10Item16Taxpayer"]').change();
	});
	$('input[name="pg9Sched10Item13Spouse"], input[name="pg9Sched10Item14Spouse"], input[name="pg9Sched10Item15Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg9Sched10Item17Spouse = (pg9Sched10Item13Spouse + pg9Sched10Item14Spouse) - pg9Sched10Item15Spouse;
		
		$('input[name="pg9Sched10Item17Spouse"]').val(pg9Sched10Item17Spouse);
		$('input[name="pg9Sched10Item17Spouse"]').change();
	});
	
	//p9Sched10Item17
	$('input[name="pg9Sched10Item13Taxpayer"], input[name="pg9Sched10Item14Taxpayer"], input[name="pg9Sched10Item15Taxpayer"], input[name="pg9Sched10Item16Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg9Sched10Item17Taxpayer = pg9Sched10Item13Taxpayer + pg9Sched10Item14Taxpayer + pg9Sched10Item15Taxpayer + pg9Sched10Item16Taxpayer;
		
		$('input[name="pg9Sched10Item17Taxpayer"]').val(pg9Sched10Item17Taxpayer);
		$('input[name="pg9Sched10Item17Taxpayer"]').change();
	});
	$('input[name="pg9Sched10Item13Spouse"], input[name="pg9Sched10Item14Spouse"], input[name="pg9Sched10Item15Spouse"], input[name="pg9Sched10Item16Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg9Sched10Item17Spouse = pg9Sched10Item13Spouse + pg9Sched10Item14Spouse + pg9Sched10Item15Spouse + pg9Sched10Item16Spouse;
		
		$('input[name="pg9Sched10Item17Spouse"]').val(pg9Sched10Item17Spouse);
		$('input[name="pg9Sched10Item17Spouse"]').change();
	});
	
	//p10Sched11AItem4
	$('input[name="pg10Sched11aItem1"], input[name="pg10Sched11aItem2b"], input[name="pg10Sched11aItem3b"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg10Sched11aItem4 = pg10Sched11aItem1 + pg10Sched11aItem2b + pg10Sched11aItem3b;
		
		$('input[name="pg10Sched11aItem4"]').val(pg10Sched11aItem4);
		$('input[name="pg10Sched11aItem4"]').change();
	});
	
	//p10Sched11AItem9
	$('input[name="pg10Sched11aItem5b"], input[name="pg10Sched11aItem6b"], input[name="pg10Sched11aItem7b"], input[name="pg10Sched11aItem8b"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg10Sched11aItem9 = pg10Sched11aItem5b + pg10Sched11aItem6b + pg10Sched11aItem7b + pg10Sched11aItem8b;
		
		$('input[name="pg10Sched11aItem9"]').val(pg10Sched11aItem9);
		$('input[name="pg10Sched11aItem9"]').change();
	});
	
	//p10Sched11AItem10
	$('input[name="pg10Sched11aItem4"], input[name="pg10Sched11aItem9"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg10Sched11aItem10 = pg10Sched11aItem4 - pg10Sched11aItem9;
		
		$('input[name="pg10Sched11aItem10"]').val(pg10Sched11aItem10);
		$('input[name="pg10Sched11aItem10"]').change();
	});
	
	//p10Sched11BItem4
	$('input[name="pg10Sched11bItem1"], input[name="pg10Sched11bItem2b"], input[name="pg10Sched11bItem3b"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg10Sched11bItem4 = pg10Sched11bItem1 + pg10Sched11bItem2b + pg10Sched11bItem3b;
		
		$('input[name="pg10Sched11bItem4"]').val(pg10Sched11bItem4);
		$('input[name="pg10Sched11bItem4"]').change();
	});
	
	//p10Sched11BItem9
	$('input[name="pg10Sched11bItem5b"], input[name="pg10Sched11bItem6b"], input[name="pg10Sched11bItem7b"], input[name="pg10sched11bItem8b"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg10Sched11bItem9 = pg10Sched11bItem5b + pg10Sched11bItem6b + pg10Sched11bItem7b + pg10sched11bItem8b;
		
		$('input[name="pg10Sched11bItem9"]').val(pg10Sched11bItem9);
		$('input[name="pg10Sched11bItem9"]').change();
	});
	
	//p10Sched11BItem10
	$('input[name="pg10Sched11aItem4"], input[name="pg10Sched11aItem9"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg10Sched11bItem10 = pg10Sched11bItem4 - pg10Sched11bItem9;
		
		$('input[name="pg10Sched11bItem10"]').val(pg10Sched11bItem10);
		$('input[name="pg10Sched11bItem10"]').change();
	});
	
	//p11Sched12AItem21
	$('input[name="pg11Sched12a1Item1b"], input[name="	pg11Sched12a1Item2b"], input[name="pg11Sched12a1Item3b"], input[name="pg11Sched12a1Item4b"], input[name="pg11Sched12a1Item5b"], input[name="pg11Sched12a1Item6b"], input[name="pg11Sched12a2Item11a"], input[name="pg11Sched12a2Item11b"], input[name="pg11Sched12a3Item17a"], input[name="pg11Sched12a3Item17b"], input[name="pg11Sched12a4Item20a"], input[name="pg11Sched12a4Item20b"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg11Sched12aItem21 = pg11Sched12a1Item1b + 	pg11Sched12a1Item2b + pg11Sched12a1Item3b + pg11Sched12a1Item4b + pg11Sched12a1Item5b + pg10Sched11bItem9 + pg11Sched12a1Item6b + pg11Sched12a2Item11a + pg11Sched12a2Item11b + pg11Sched12a3Item17a + pg11Sched12a3Item17b + pg11Sched12a4Item20a + pg11Sched12a4Item20b;
		
		$('input[name="pg11Sched12aItem21"]').val(pg11Sched12aItem21);
		$('input[name="pg11Sched12aItem21"]').change();
	});
	
	//p11Sched12BItem10 xxxxx
	$('input[name="pg11Sched12bItem1"], input[name="pg11Sched12bItem2"], input[name="pg11Sched12bItem3"], input[name="pg11Sched12b1Item7a"], input[name="pg11Sched12b1Item7b"], input[name="pg11Sched12b2Item9a"], input[name="pg11Sched12b2Item9b"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg11Sched12bItem10 = pg11Sched12bItem1 + pg11Sched12bItem2 + pg11Sched12bItem3 + pg11Sched12b1Item7a + pg11Sched12b1Item7b + pg11Sched12b2Item9a + pg11Sched12b2Item9b;
		
		$('input[name="pg11Sched12bItem10"]').val(pg11Sched12bItem10);
		$('input[name="pg11Sched12bItem10"]').change();
	});
		/*
	p12part9item1a taxpayer
	$('input[name="pg2Item50Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item1a = pg2Item50Taxpayer;
		
		$('input[name="pg12Part9Item1a"]').val(pg12Part9Item1a);
		$('input[name="pg12Part9Item1a"]').change();
	});
	
	//p12part9item2a taxpayer
	$('input[name="pg2Item51Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item2a = pg2Item51Taxpayer;
		
		$('input[name="pg12Part9Item2a"]').val(pg12Part9Item2a);
		$('input[name="pg12Part9Item2a"]').change();
	});

	//p12part9item3a taxpayer
	
	$('input[name="pg12Part9Item1a"], input[name="pg12Part9Item2a"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item3a = pg12Part9Item1a + pg12Part9Item2a;
		// alert('safe');
		$('input[name="pg12Part9Item3a"]').val(pg12Part9Item3a);
		$('input[name="pg12Part9Item3a"]').change();
	});
	
	//p12part9item3a taxpayer
	$('input[name="pg12Part9Item1a"], input[name="pg12Part9Item2a"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item3a = pg12Part9Item1a + pg12Part9Item2a;
		
		$('input[name="pg12Part9Item3a"]').val(pg12Part9Item3a);
		$('input[name="pg12Part9Item3a"]').change();
	});
	
	
	//p12part9item4a taxpayer
	$('input[name="pg2Item53Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item4a = pg2Item53Taxpayer;
		
		$('input[name="pg12Part9Item4a"]').val(pg12Part9Item4a);
		$('input[name="pg12Part9Item4a"]').change();
	});
	//p12part9item5a taxpayer
	$('input[name="pg12Part9Item3a"], input[name="pg12Part9Item4a"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item5a = pg12Part9Item3a - pg12Part9Item4a ;
		
		$('input[name="pg12Part9Item5a"]').val(pg12Part9Item5a);
		$('input[name="pg12Part9Item5a"]').change();
	});
	//p12part9item6a taxpayer
	$('input[name="pg2Item55Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item6a = pg2Item55Taxpayer;
		
		$('input[name="pg12Part9Item6a"]').val(pg12Part9Item6a);
		$('input[name="pg12Part9Item6a"]').change();
	});
	//p12part9item7a taxpayer
	$('input[name="pg12Part9Item5a"], input[name="pg12Part9Item6a"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item7a = pg12Part9Item5a - pg12Part9Item6a ;
		
		$('input[name="pg12Part9Item7a"]').val(pg12Part9Item7a);
		$('input[name="pg12Part9Item7a"]').change();
	});
	//p12part9item8a taxpayer
	$('input[name="pg2Item57Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item8a = pg2Item57Taxpayer;
		
		$('input[name="pg12Part9Item8a"]').val(pg12Part9Item8a);
		$('input[name="pg12Part9Item8a"]').change();
	});
	//p12part9item9a taxpayer
	$('input[name="pg2Item58Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item9a = pg2Item58Taxpayer;
		
		$('input[name="pg12Part9Item9a"]').val(pg12Part9Item9a);
		$('input[name="pg12Part9Item9a"]').change();
	});
	//p12part9item10a taxpayer
	$('input[name="pg2Item58Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item10a = pg2Item58Taxpayer;
		
		$('input[name="pg12Part9Item10a"]').val(pg12Part9Item10a);
		$('input[name="pg12Part9Item10a"]').change();
	});
	//p12part9item11a taxpayer
	$('input[name="pg12Part9Item8a"], input[name="pg12Part9Item9a"], input[name="pg12Part9Item10a"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item11a = pg12Part9Item8a + pg12Part9Item9a + pg12Part9Item10a;
		
		$('input[name="pg12Part9Item11a"]').val(pg12Part9Item11a);
		$('input[name="pg12Part9Item11a"]').change();
	});
	//p12part9item12a taxpayer wala pa
	
	//p12part9item13a taxpayer
	$('input[name="pg12Part9Item7a"], input[name="pg12Part9Item11a"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item13a = pg12Part9Item7a - pg12Part9Item11a;
		
		$('input[name="pg12Part9Item13a"]').val(pg12Part9Item13a);
		$('input[name="pg12Part9Item13a"]').change();
	});
	//p12part9item14a taxpayer
	$('input[name="pg2Item63Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item14a = pg2Item63Taxpayer;
		
		$('input[name="pg12Part9Item14a"]').val(pg12Part9Item14a);
		$('input[name="pg12Part9Item14a"]').change();
	});
	//p12part9item15a taxpayer
	$('input[name="pg12Part9Item13a"], input[name="pg12Part9Item14a"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item15a = pg12Part9Item13a + pg12Part9Item14a;
		
		$('input[name="pg12Part9Item15a"]').val(pg12Part9Item15a);
		$('input[name="pg12Part9Item15a"]').change();
	});
	//p12part9item16a taxpayer
	$('input[name="pg2Item65Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item16a = pg2Item65Taxpayer;
		
		$('input[name="pg12Part9Item16a"]').val(pg12Part9Item16a);
		$('input[name="pg12Part9Item16a"]').change();
	});
	//p12part9item17a taxpayer
	$('input[name="pg12Part9Item15a"], input[name="pg12Part9Item16a"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item17a = pg12Part9Item15a - pg12Part9Item16a;
		
		$('input[name="pg12Part9Item17a"]').val(pg12Part9Item17a);
		$('input[name="pg12Part9Item17a"]').change();
	});
	//p12part9item18a taxpayer
	$('input[name="pg3Item68Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item18a = pg3Item68Taxpayer;
		
		$('input[name="pg12Part9Item18a"]').val(pg12Part9Item18a);
		$('input[name="pg12Part9Item18a"]').change();
	});
	//p12part9item19a taxpayer
	$('input[name="pg9Sched9Item10Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item19a = pg9Sched9Item10Taxpayer;
		
		$('input[name="pg12Part9Item19a"]').val(pg12Part9Item19a);
		$('input[name="pg12Part9Item19a"]').change();
	});
	//p12part9item20a taxpayer
	$('input[name="pg12Part9Item18a"], input[name="pg12Part9Item19a"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item20a = pg12Part9Item18a - pg12Part9Item19a;
		
		$('input[name="pg12Part9Item20a"]').val(pg12Part9Item20a);
		$('input[name="pg12Part9Item20a"]').change();
	});
	//p12part9item21a taxpayer
	$('input[name="pg3Item90Taxpayer"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item21a = pg3Item90Taxpayer;
		
		$('input[name="pg12Part9Item21a"]').val(pg12Part9Item21a);
		$('input[name="pg12Part9Item21a"]').change();
	}); 
	
	//for sum D
	//p12part9item1d taxpayer
	$('input[name="pg12Part9Item1a"], input[name="pg12Part9Item1b"], input[name="pg12Part9Item1c"]').change(function(){
		alert('zah');
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item1d = pg12Part9Item1a + pg12Part9Item1b + pg12Part9Item1c;
		
		$('input[name="pg12Part9Item1d"]').val(pg12Part9Item1d);
		$('input[name="pg12Part9Item1d"]').change();
	});
	//p12part9item2d taxpayer
	$('input[name="pg12Part9Item2a"], input[name="pg12Part9Item2b"], input[name="pg12Part9Item2c"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item2d = pg12Part9Item2a + pg12Part9Item2b + pg12Part9Item2c;
		
		$('input[name="pg12Part9Item2d"]').val(pg12Part9Item2d);
		$('input[name="pg12Part9Item2d"]').change();
	});
	//p12part9item3d taxpayer
	$('input[name="pg12Part9Item3a"], input[name="pg12Part9Item3b"], input[name="pg12Part9Item3c"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item3d = pg12Part9Item3a + pg12Part9Item3b + pg12Part9Item3c;
		
		$('input[name="pg12Part9Item3d"]').val(pg12Part9Item3d);
		$('input[name="pg12Part9Item3d"]').change();
	});
	//p12part9item4d taxpayer
	$('input[name="pg12Part9Item4a"], input[name="pg12Part9Item4b"], input[name="pg12Part9Item4c"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item4d = pg12Part9Item4a + pg12Part9Item4b + pg12Part9Item4c;
		
		$('input[name="pg12Part9Item4d"]').val(pg12Part9Item4d);
		$('input[name="pg12Part9Item4d"]').change();
	});
	//p12part9item5d taxpayer
	$('input[name="pg12Part9Item5a"], input[name="pg12Part9Item5b"], input[name="pg12Part9Item5c"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item5d = pg12Part9Item5a + pg12Part9Item5b + pg12Part9Item5c;
		
		$('input[name="pg12Part9Item5d"]').val(pg12Part9Item5d);
		$('input[name="pg12Part9Item5d"]').change();
	});
	//p12part9item6d taxpayer
	$('input[name="pg12Part9Item6a"], input[name="pg12Part9Item6b"], input[name="pg12Part9Item6c"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item6d = pg12Part9Item6a + pg12Part9Item6b + pg12Part9Item6c;
		
		$('input[name="pg12Part9Item6d"]').val(pg12Part9Item6d);
		$('input[name="pg12Part9Item6d"]').change();
	});
	//p12part9item7d taxpayer
	$('input[name="pg12Part9Item7a"], input[name="pg12Part9Item7b"], input[name="pg12Part9Item7c"]').change(function(){
		// pg2Item77Taxpayer = getInt($('input[name="pg2Item77Taxpayer"]').val());
		
		pg12Part9Item7d = pg12Part9Item7a + pg12Part9Item7b + pg12Part9Item7c;
		
		$('input[name="pg12Part9Item7d"]').val(pg12Part9Item7d);
		$('input[name="pg12Part9Item7d"]').change();
	});
	//p12part9item8d taxpayer
	$('input[name="pg12Part9Item8a"], input[name="pg12Part9Item8b"], input[name="pg12Part9Item8c"]').change(function(){
		// pg2Item88Taxpayer = getInt($('input[name="pg2Item88Taxpayer"]').val());
		
		pg12Part9Item8d = pg12Part9Item8a + pg12Part9Item8b + pg12Part9Item8c;
		
		$('input[name="pg12Part9Item8d"]').val(pg12Part9Item8d);
		$('input[name="pg12Part9Item8d"]').change();
	});
	//p12part9item9d taxpayer
	$('input[name="pg12Part9Item9a"], input[name="pg12Part9Item9b"], input[name="pg12Part9Item9c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item9d = pg12Part9Item9a + pg12Part9Item9b + pg12Part9Item9c;
		
		$('input[name="pg12Part9Item9d"]').val(pg12Part9Item9d);
		$('input[name="pg12Part9Item9d"]').change();
	});
	//p12part9item10d taxpayer
	$('input[name="pg12Part9Item10a"], input[name="pg12Part9Item10b"], input[name="pg12Part9Item10c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item10d = pg12Part9Item10a + pg12Part9Item10b + pg12Part9Item10c;
		
		$('input[name="pg12Part9Item10d"]').val(pg12Part9Item10d);
		$('input[name="pg12Part9Item10d"]').change();
	});
	//p12part9item11d taxpayer
	$('input[name="pg12Part9Item11a"], input[name="pg12Part9Item11b"], input[name="pg12Part9Item11c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item11d = pg12Part9Item11a + pg12Part9Item11b + pg12Part9Item11c;
		
		$('input[name="pg12Part9Item11d"]').val(pg12Part9Item11d);
		$('input[name="pg12Part9Item11d"]').change();
	});
	//p12part9item12d taxpayer
	$('input[name="pg12Part9Item12a"], input[name="pg12Part9Item12b"], input[name="pg12Part9Item12c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item12d = pg12Part9Item12a + pg12Part9Item12b + pg12Part9Item12c;
		
		$('input[name="pg12Part9Item12d"]').val(pg12Part9Item12d);
		$('input[name="pg12Part9Item12d"]').change();
	});
	//p12part9item13d taxpayer
	$('input[name="pg12Part9Item13a"], input[name="pg12Part9Item13b"], input[name="pg12Part9Item13c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item13d = pg12Part9Item13a + pg12Part9Item13b + pg12Part9Item13c;
		
		$('input[name="pg12Part9Item13d"]').val(pg12Part9Item13d);
		$('input[name="pg12Part9Item13d"]').change();
	});
	//p12part9item14d taxpayer
	$('input[name="pg12Part9Item14a"], input[name="pg12Part9Item14b"], input[name="pg12Part9Item14c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item14d = pg12Part9Item14a + pg12Part9Item14b + pg12Part9Item14c;
		
		$('input[name="pg12Part9Item14d"]').val(pg12Part9Item14d);
		$('input[name="pg12Part9Item14d"]').change();
	});
	//p12part9item15d taxpayer
	$('input[name="pg12Part9Item15a"], input[name="pg12Part9Item15b"], input[name="pg12Part9Item15c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item15d = pg12Part9Item15a + pg12Part9Item15b + pg12Part9Item15c;
		
		$('input[name="pg12Part9Item15d"]').val(pg12Part9Item15d);
		$('input[name="pg12Part9Item15d"]').change();
	});
	//p12part9item16d taxpayer
	$('input[name="pg12Part9Item16a"], input[name="pg12Part9Item16b"], input[name="pg12Part9Item16c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item16d = pg12Part9Item16a + pg12Part9Item16b + pg12Part9Item16c;
		
		$('input[name="pg12Part9Item16d"]').val(pg12Part9Item16d);
		$('input[name="pg12Part9Item16d"]').change();
	});
	//p12part9item17d taxpayer
	$('input[name="pg12Part9Item17a"], input[name="pg12Part9Item17b"], input[name="pg12Part9Item17c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item17d = pg12Part9Item17a + pg12Part9Item17b + pg12Part9Item17c;
		
		$('input[name="pg12Part9Item17d"]').val(pg12Part9Item17d);
		$('input[name="pg12Part9Item17d"]').change();
	});
	//p12part9item18d taxpayer
	$('input[name="pg12Part9Item18a"], input[name="pg12Part9Item18b"], input[name="pg12Part9Item18c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item18d = pg12Part9Item18a + pg12Part9Item18b + pg12Part9Item18c;
		
		$('input[name="pg12Part9Item18d"]').val(pg12Part9Item18d);
		$('input[name="pg12Part9Item18d"]').change();
	});
	//p12part9item19d taxpayer
	$('input[name="pg12Part9Item19a"], input[name="pg12Part9Item19b"], input[name="pg12Part9Item19c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item19d = pg12Part9Item19a + pg12Part9Item19b + pg12Part9Item19c;
		
		$('input[name="pg12Part9Item19d"]').val(pg12Part9Item19d);
		$('input[name="pg12Part9Item19d"]').change();
	});
	//p12part9item20d taxpayer
	$('input[name="pg12Part9Item20a"], input[name="pg12Part9Item20b"], input[name="pg12Part9Item20c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item20d = pg12Part9Item20a + pg12Part9Item20b + pg12Part9Item20c;
		
		$('input[name="pg12Part9Item20d"]').val(pg12Part9Item20d);
		$('input[name="pg12Part9Item20d"]').change();
	});
	//p12part9item21d taxpayer
	$('input[name="pg12Part9Item21a"], input[name="pg12Part9Item21b"], input[name="pg12Part9Item21c"]').change(function(){
		// pg2Item99Taxpayer = getInt($('input[name="pg2Item99Taxpayer"]').val());
		
		pg12Part9Item21d = pg12Part9Item21a + pg12Part9Item21b + pg12Part9Item21c;
		
		$('input[name="pg12Part9Item21d"]').val(pg12Part9Item21d);
		$('input[name="pg12Part9Item21d"]').change();
	});
	//end
	
	//p12part9item1e Spouse
	$('input[name="pg2Item50Spouse"]').change(function(){
		// pg2Item67Taxpayer = getInt($('input[name="pg2Item67Taxpayer"]').val());
		
		pg12Part9Item1e = pg2Item50Spouse;
		
		$('input[name="pg12Part9Item1e"]').val(pg12Part9Item1e);
		$('input[name="pg12Part9Item1e"]').change();
	});
	
	//p12part9item2e Spouse
	$('input[name="pg2Item51Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item2e = pg2Item51Spouse;
		
		$('input[name="pg12Part9Item2e"]').val(pg12Part9Item2e);
		$('input[name="pg12Part9Item2e"]').change();
	});
	
	//p12part9item3e Spouse
	$('input[name="pg12Part9Item1e"], input[name="pg12Part9Item2e"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item3e = pg12Part9Item1e + pg12Part9Item2e ;
		
		$('input[name="pg12Part9Item3e"]').val(pg12Part9Item3e);
		$('input[name="pg12Part9Item3e"]').change();
	});
	
	//p12part9item4e Spouse
	$('input[name="pg2Item53Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item4e = pg2Item53Spouse;
		
		$('input[name="pg12Part9Item4e"]').val(pg12Part9Item4e);
		$('input[name="pg12Part9Item4e"]').change();
	});
	//p12part9item5e Spouse
	$('input[name="pg12Part9Item3e"], input[name="pg12Part9Item4e"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item5e = pg12Part9Item3e - pg12Part9Item4e ;
		
		$('input[name="pg12Part9Item5e"]').val(pg12Part9Item5e);
		$('input[name="pg12Part9Item5e"]').change();
	});
	//p12part9item6e Spouse
	$('input[name="pg2Item55Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item6e = pg2Item55Spouse;
		
		$('input[name="pg12Part9Item6e"]').val(pg12Part9Item6e);
		$('input[name="pg12Part9Item6e"]').change();
	});
	//p12part9item7e Spouse
	$('input[name="pg12Part9Item5e"], input[name="pg12Part9Item6e"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item7e = pg12Part9Item5e - pg12Part9Item6e ;
		
		$('input[name="pg12Part9Item7e"]').val(pg12Part9Item7e);
		$('input[name="pg12Part9Item7e"]').change();
	});
	//p12part9item8e Spouse
	$('input[name="pg2Item57Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item8e = pg2Item57Spouse;
		
		$('input[name="pg12Part9Item8e"]').val(pg12Part9Item8e);
		$('input[name="pg12Part9Item8e"]').change();
	});
	//p12part9item9e Spouse
	$('input[name="pg2Item58Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item9e = pg2Item58Spouse;
		
		$('input[name="pg12Part9Item9e"]').val(pg12Part9Item9e);
		$('input[name="pg12Part9Item9e"]').change();
	});
	//p12part9item10e Spouse
	$('input[name="pg2Item58Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item10e = pg2Item58Spouse;
		
		$('input[name="pg12Part9Item10e"]').val(pg12Part9Item10e);
		$('input[name="pg12Part9Item10e"]').change();
	});
	//p12part9item11e Spouse
	$('input[name="pg12Part9Item8e"], input[name="pg12Part9Item9e"], input[name="pg12Part9Item10e"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item11e = pg12Part9Item8e + pg12Part9Item9e + pg12Part9Item10e;
		
		$('input[name="pg12Part9Item11e"]').val(pg12Part9Item11e);
		$('input[name="pg12Part9Item11e"]').change();
	});
	//p12part9item12e Spouse wala pa
	
	//p12part9item13e Spouse
	$('input[name="pg12Part9Item7e"], input[name="pg12Part9Item11e"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item13e = pg12Part9Item7e - pg12Part9Item11e;
		
		$('input[name="pg12Part9Item13e"]').val(pg12Part9Item13e);
		$('input[name="pg12Part9Item13e"]').change();
	});
	//p12part9item14e Spouse
	$('input[name="pg2Item63Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item14e = pg2Item63Spouse;
		
		$('input[name="pg12Part9Item14e"]').val(pg12Part9Item14e);
		$('input[name="pg12Part9Item14e"]').change();
	});
	//p12part9item15e Spouse
	$('input[name="pg12Part9Item13e"], input[name="pg12Part9Item14e"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item15e = pg12Part9Item13e + pg12Part9Item14e;
		
		$('input[name="pg12Part9Item15e"]').val(pg12Part9Item15e);
		$('input[name="pg12Part9Item15e"]').change();
	});
	//p12part9item16e Spouse
	$('input[name="pg2Item65Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item16e = pg2Item65Spouse;
		
		$('input[name="pg12Part9Item16e"]').val(pg12Part9Item16e);
		$('input[name="pg12Part9Item16e"]').change();
	});
	//p12part9item17e Spouse
	$('input[name="pg12Part9Item15e"], input[name="pg12Part9Item16e"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item17e = pg12Part9Item15e - pg12Part9Item16e;
		
		$('input[name="pg12Part9Item17e"]').val(pg12Part9Item17e);
		$('input[name="pg12Part9Item17e"]').change();
	});
	//p12part9item18e Spouse
	$('input[name="pg3Item68Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item18e = pg3Item68Spouse;
		
		$('input[name="pg12Part9Item18e"]').val(pg12Part9Item18e);
		$('input[name="pg12Part9Item18e"]').change();
	});
	//p12part9item19e Spouse
	$('input[name="pg9Sched9Item10Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item19e = pg9Sched9Item10Spouse;
		
		$('input[name="pg12Part9Item19e"]').val(pg12Part9Item19e);
		$('input[name="pg12Part9Item19e"]').change();
	});
	//p12part9item20e Spouse
	$('input[name="pg12Part9Item18e"], input[name="pg12Part9Item19e"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item20e = pg12Part9Item18e - pg12Part9Item19e;
		
		$('input[name="pg12Part9Item20e"]').val(pg12Part9Item20e);
		$('input[name="pg12Part9Item20e"]').change();
	});
	//p12part9item21e Spouse
	$('input[name="pg3Item90Spouse"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item21e = pg3Item90Spouse;
		
		$('input[name="pg12Part9Item21e"]').val(pg12Part9Item21e);
		$('input[name="pg12Part9Item21e"]').change();
	});
	
	//for sum H
	//p12part9item1h Spouse
	$('input[name="pg12Part9Item1e"], input[name="pg12Part9Item1f"], input[name="pg12Part9Item1g"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item1h = pg12Part9Item1e + pg12Part9Item1f + pg12Part9Item1g;
		
		$('input[name="pg12Part9Item1h"]').val(pg12Part9Item1h);
		$('input[name="pg12Part9Item1h"]').change();
	});
	//p12part9item2h Spouse
	$('input[name="pg12Part9Item2e"], input[name="pg12Part9Item2f"], input[name="pg12Part9Item2g"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item2h = pg12Part9Item2e + pg12Part9Item2f + pg12Part9Item2g;
		
		$('input[name="pg12Part9Item2h"]').val(pg12Part9Item2h);
		$('input[name="pg12Part9Item2h"]').change();
	});
	//p12part9item3h Spouse
	$('input[name="pg12Part9Item3e"], input[name="pg12Part9Item3f"], input[name="pg12Part9Item3g"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item3h = pg12Part9Item3e + pg12Part9Item3f + pg12Part9Item3g;
		
		$('input[name="pg12Part9Item3h"]').val(pg12Part9Item3h);
		$('input[name="pg12Part9Item3h"]').change();
	});
	//p12part9item4h Spouse
	$('input[name="pg12Part9Item4e"], input[name="pg12Part9Item4f"], input[name="pg12Part9Item4g"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item4h = pg12Part9Item4e + pg12Part9Item4f + pg12Part9Item4g;
		
		$('input[name="pg12Part9Item4h"]').val(pg12Part9Item4h);
		$('input[name="pg12Part9Item4h"]').change();
	});
	//p12part9item5h Spouse
	$('input[name="pg12Part9Item5e"], input[name="pg12Part9Item5f"], input[name="pg12Part9Item5g"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item5h = pg12Part9Item5e + pg12Part9Item5f + pg12Part9Item5g;
		
		$('input[name="pg12Part9Item5h"]').val(pg12Part9Item5h);
		$('input[name="pg12Part9Item5h"]').change();
	});
	//p12part9item6h Spouse
	$('input[name="pg12Part9Item6e"], input[name="pg12Part9Item6f"], input[name="pg12Part9Item6g"]').change(function(){
		// pg2Item67Spouse = getInt($('input[name="pg2Item67Spouse"]').val());
		
		pg12Part9Item6h = pg12Part9Item6e + pg12Part9Item6g + pg12Part9Item6g;
		
		$('input[name="pg12Part9Item6h"]').val(pg12Part9Item6h);
		$('input[name="pg12Part9Item6h"]').change();
	});
	//p12part9item7h Spouse
	$('input[name="pg12Part9Item7e"], input[name="pg12Part9Item7f"], input[name="pg12Part9Item7g"]').change(function(){
		// pg2Item77Spouse = getInt($('input[name="pg2Item77Spouse"]').val());
		
		pg12Part9Item7h = pg12Part9Item7e + pg12Part9Item7f + pg12Part9Item7g;
		
		$('input[name="pg12Part9Item7h"]').val(pg12Part9Item7h);
		$('input[name="pg12Part9Item7h"]').change();
	});
	//p12part9item8h Spouse
	$('input[name="pg12Part9Item8e"], input[name="pg12Part9Item8f"], input[name="pg12Part9Item8g"]').change(function(){
		// pg2Item88Spouse = getInt($('input[name="pg2Item88Spouse"]').val());
		
		pg12Part9Item8h = pg12Part9Item8e + pg12Part9Item8f + pg12Part9Item8g;
		
		$('input[name="pg12Part9Item8h"]').val(pg12Part9Item8h);
		$('input[name="pg12Part9Item8h"]').change();
	});
	//p12part9item9h Spouse
	$('input[name="pg12Part9Item9e"], input[name="pg12Part9Item9f"], input[name="pg12Part9Item9g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item9h = pg12Part9Item9e + pg12Part9Item9f + pg12Part9Item9g;
		
		$('input[name="pg12Part9Item9h"]').val(pg12Part9Item9h);
		$('input[name="pg12Part9Item9h"]').change();
	});
	//p12part9item10h Spouse
	$('input[name="pg12Part9Item10e"], input[name="pg12Part9Item10f"], input[name="pg12Part9Item10g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item10h = pg12Part9Item10e + pg12Part9Item10f + pg12Part9Item10g;
		
		$('input[name="pg12Part9Item10h"]').val(pg12Part9Item10h);
		$('input[name="pg12Part9Item10h"]').change();
	});
	//p12part9item11h Spouse
	$('input[name="pg12Part9Item11e"], input[name="pg12Part9Item11f"], input[name="pg12Part9Item11g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item11h = pg12Part9Item11e + pg12Part9Item11f + pg12Part9Item11g;
		
		$('input[name="pg12Part9Item11h"]').val(pg12Part9Item11h);
		$('input[name="pg12Part9Item11h"]').change();
	});
	//p12part9item12h Spouse
	$('input[name="pg12Part9Item12e"], input[name="pg12Part9Item12f"], input[name="pg12Part9Item12g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item12h = pg12Part9Item12e + pg12Part9Item12f + pg12Part9Item12g;
		
		$('input[name="pg12Part9Item12h"]').val(pg12Part9Item12h);
		$('input[name="pg12Part9Item12h"]').change();
	});
	//p12part9item13h Spouse
	$('input[name="pg12Part9Item13e"], input[name="pg12Part9Item13f"], input[name="pg12Part9Item13g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item13h = pg12Part9Item13e + pg12Part9Item13f + pg12Part9Item13g;
		
		$('input[name="pg12Part9Item13h"]').val(pg12Part9Item13h);
		$('input[name="pg12Part9Item13h"]').change();
	});
	//p12part9item14h Spouse
	$('input[name="pg12Part9Item14e"], input[name="pg12Part9Item14f"], input[name="pg12Part9Item14g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item14h = pg12Part9Item14e + pg12Part9Item14f + pg12Part9Item14g;
		
		$('input[name="pg12Part9Item14h"]').val(pg12Part9Item14h);
		$('input[name="pg12Part9Item14h"]').change();
	});
	//p12part9item15h Spouse
	$('input[name="pg12Part9Item15e"], input[name="pg12Part9Item15f"], input[name="pg12Part9Item15g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item15h = pg12Part9Item15e + pg12Part9Item15f + pg12Part9Item15g;
		
		$('input[name="pg12Part9Item15h"]').val(pg12Part9Item15h);
		$('input[name="pg12Part9Item15h"]').change();
	});
	//p12part9item16h Spouse
	$('input[name="pg12Part9Item16e"], input[name="pg12Part9Item16f"], input[name="pg12Part9Item16g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item16h = pg12Part9Item16e + pg12Part9Item16f + pg12Part9Item16g;
		
		$('input[name="pg12Part9Item16h"]').val(pg12Part9Item16h);
		$('input[name="pg12Part9Item16h"]').change();
	});
	//p12part9item17h Spouse
	$('input[name="pg12Part9Item17e"], input[name="pg12Part9Item17f"], input[name="pg12Part9Item17g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item17h = pg12Part9Item17e + pg12Part9Item17f + pg12Part9Item17g;
		
		$('input[name="pg12Part9Item17h"]').val(pg12Part9Item17h);
		$('input[name="pg12Part9Item17h"]').change();
	});
	//p12part9item18h Spouse
	$('input[name="pg12Part9Item18e"], input[name="pg12Part9Item18f"], input[name="pg12Part9Item18g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item18h = pg12Part9Item18e + pg12Part9Item18f + pg12Part9Item18g;
		
		$('input[name="pg12Part9Item18h"]').val(pg12Part9Item18h);
		$('input[name="pg12Part9Item18h"]').change();
	});
	//p12part9item19h Spouse
	$('input[name="pg12Part9Item19e"], input[name="pg12Part9Item19f"], input[name="pg12Part9Item19g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item19h = pg12Part9Item19e + pg12Part9Item19f + pg12Part9Item19g;
		
		$('input[name="pg12Part9Item19h"]').val(pg12Part9Item19h);
		$('input[name="pg12Part9Item19h"]').change();
	});
	//p12part9item20h Spouse
	$('input[name="pg12Part9Item20e"], input[name="pg12Part9Item20f"], input[name="pg12Part9Item20g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item20h = pg12Part9Item20e + pg12Part9Item20f + pg12Part9Item20g;
		
		$('input[name="pg12Part9Item20h"]').val(pg12Part9Item20h);
		$('input[name="pg12Part9Item20h"]').change();
	});
	//p12part9item21h Spouse
	$('input[name="pg12Part9Item21e"], input[name="pg12Part9Item21f"], input[name="pg12Part9Item21g"]').change(function(){
		// pg2Item99Spouse = getInt($('input[name="pg2Item99Spouse"]').val());
		
		pg12Part9Item21h = pg12Part9Item21e + pg12Part9Item21f + pg12Part9Item21g;
		
		$('input[name="pg12Part9Item21h"]').val(pg12Part9Item21h);
		$('input[name="pg12Part9Item21h"]').change();
	});
	//end
	*/
});