$(function(){
	
	$('input[name="iTR1701Q36B"]').change(function(){
		net = getInt($('input[name="iTR1701Q36B"]').val());
		
		taxbase = fixedtax = rate = 0;
		
        if (net >= 1 && net <= 10000) {
            taxbase = 0;
			fixedtax = 0;
            rate = 5;
        } else if (net > 10000 && net < 30000) {
            taxbase = 10000;
            fixedtax = 500;
            rate = 10;
        } else if (net > 30000 && net < 70000) {
            taxbase = 30000;
            fixedtax = 2500;
            rate = 15;
        } else if (net > 70000 && net < 140000) {
            taxbase = 70000;
            fixedtax = 8500;
            rate = 20;
        } else if (net > 140000 && net < 250000) {
            taxbase = 140000;
            fixedtax = 22500;
            rate = 25;
        } else if (net > 250000 && net < 500000) {
            taxbase = 250000;
            fixedtax = 50000;
            rate = 30;
        } else if (net > 500000) {
            taxbase = 500000;
            fixedtax = 125000;
            rate = 32;
        }
        excess = net - taxbase;
        taxecess = excess * (rate / 100);
		
		if(fixedtax + taxecess < 0){
			provincome = 0;
		}else{
			provincome = fixedtax + taxecess;
		} 
		
		iTR1701Q37B = provincome ;
		
		$('input[name="iTR1701Q37B"]').val(iTR1701Q37B);
		$('input[name="iTR1701Q37B"]').change();
	});
	
	//26a
	$('input[name="iTR1701Q26A"], input[name="iTR1701Q27A"]').change(function(){
		iTR1701Q26A = getInt($('input[name="iTR1701Q26A"]').val());
		iTR1701Q27A = getInt($('input[name="iTR1701Q27A"]').val());
		
		iTR1701Q28A = iTR1701Q26A + iTR1701Q27A;
		
		$('input[name="iTR1701Q28A"]').val(iTR1701Q28A);
		$('input[name="iTR1701Q28A"]').change();
	});
	
	$('input[name="iTR1701Q26B"], input[name="iTR1701Q27B"]').change(function(){
		iTR1701Q26B = getInt($('input[name="iTR1701Q26B"]').val());
		iTR1701Q27B = getInt($('input[name="iTR1701Q27B"]').val());
		
		iTR1701Q28B = iTR1701Q26B + iTR1701Q27B;
		
		$('input[name="iTR1701Q28B"]').val(iTR1701Q28B);
		$('input[name="iTR1701Q28B"]').change();
	});
	
	$('input[name="iTR1701Q28A"], input[name="iTR1701Q29A"]').change(function(){
		iTR1701Q28A = getInt($('input[name="iTR1701Q28A"]').val());
		iTR1701Q29A = getInt($('input[name="iTR1701Q29A"]').val());
		
		iTR1701Q30A = iTR1701Q28A + iTR1701Q29A;
		
		$('input[name="iTR1701Q30A"]').val(iTR1701Q30A);
		$('input[name="iTR1701Q30A"]').change();
	});
	
	$('input[name="iTR1701Q28B"], input[name="iTR1701Q29B"]').change(function(){
		iTR1701Q28B = getInt($('input[name="iTR1701Q28B"]').val());
		iTR1701Q29B = getInt($('input[name="iTR1701Q29B"]').val());
		
		iTR1701Q30B = iTR1701Q28B + iTR1701Q29B;
		
		$('input[name="iTR1701Q30B"]').val(iTR1701Q30B);
		$('input[name="iTR1701Q30B"]').change();
	});
	
	$('input[name="iTR1701Q30A"], input[name="iTR1701Q31A"]').change(function(){
		iTR1701Q30A = getInt($('input[name="iTR1701Q30A"]').val());
		iTR1701Q31A = getInt($('input[name="iTR1701Q31A"]').val());
		
		iTR1701Q32A = iTR1701Q30A + iTR1701Q31A;
		
		$('input[name="iTR1701Q32A"]').val(iTR1701Q32A);
		$('input[name="iTR1701Q32A"]').change();
	});
	
	$('input[name="iTR1701Q30B"], input[name="iTR1701Q31B"]').change(function(){
		iTR1701Q30B = getInt($('input[name="iTR1701Q30B"]').val());
		iTR1701Q31B = getInt($('input[name="iTR1701Q31B"]').val());
		
		iTR1701Q32B = iTR1701Q30B + iTR1701Q31B;
		
		$('input[name="iTR1701Q32B"]').val(iTR1701Q32B);
		$('input[name="iTR1701Q32B"]').change();
	});
	
	$('input[name="iTR1701Q32A"], input[name="iTR1701Q33A"]').change(function(){
		iTR1701Q32A = getInt($('input[name="iTR1701Q32A"]').val());
		iTR1701Q33A = getInt($('input[name="iTR1701Q33A"]').val());
		
		iTR1701Q34A = iTR1701Q32A + iTR1701Q33A;
		
		$('input[name="iTR1701Q34A"]').val(iTR1701Q34A);
		$('input[name="iTR1701Q34A"]').change();
	});
	
	$('input[name="iTR1701Q32B"], input[name="iTR1701Q33B"]').change(function(){
		iTR1701Q32B = getInt($('input[name="iTR1701Q32B"]').val());
		iTR1701Q33B = getInt($('input[name="iTR1701Q33B"]').val());
		
		iTR1701Q34B = iTR1701Q32B + iTR1701Q33B;
		
		$('input[name="iTR1701Q34B"]').val(iTR1701Q34B);
		$('input[name="iTR1701Q34B"]').change();
	});
	
	$('input[name="iTR1701Q34A"], input[name="iTR1701Q35A"]').change(function(){
		iTR1701Q34A = getInt($('input[name="iTR1701Q34A"]').val());
		iTR1701Q35A = getInt($('input[name="iTR1701Q35A"]').val());
		
		iTR1701Q36A = iTR1701Q34A + iTR1701Q35A;
		
		$('input[name="iTR1701Q36A"]').val(iTR1701Q36A);
		$('input[name="iTR1701Q36A"]').change();
	});
	
	$('input[name="iTR1701Q34B"], input[name="iTR1701Q35B"]').change(function(){
		iTR1701Q34B = getInt($('input[name="iTR1701Q34B"]').val());
		iTR1701Q35B = getInt($('input[name="iTR1701Q35B"]').val());
		
		iTR1701Q36B = iTR1701Q34B + iTR1701Q35B;
		
		$('input[name="iTR1701Q36B"]').val(iTR1701Q36B);
		$('input[name="iTR1701Q36B"]').change();
	});
	
	$('input[name="iTR1701Q38A"], input[name="iTR1701Q38C"], input[name="iTR1701Q38E"], input[name="iTR1701Q38G"], input[name="iTR1701Q38I"], input[name="iTR1701Q38K"]').change(function(){
		iTR1701Q38A = getInt($('input[name="iTR1701Q38A"]').val());
		iTR1701Q38C = getInt($('input[name="iTR1701Q38C"]').val());
		iTR1701Q38E = getInt($('input[name="iTR1701Q38E"]').val());
		iTR1701Q38G = getInt($('input[name="iTR1701Q38G"]').val());
		iTR1701Q38I = getInt($('input[name="iTR1701Q38I"]').val());
		iTR1701Q38K = getInt($('input[name="iTR1701Q38K"]').val());
		
		iTR1701Q38M = iTR1701Q38A + iTR1701Q38C + iTR1701Q38E + iTR1701Q38G + iTR1701Q38I + iTR1701Q38K;
		
		$('input[name="iTR1701Q38M"]').val(iTR1701Q38M);
		$('input[name="iTR1701Q38M"]').change();
	});
	
	$('input[name="iTR1701Q38B"], input[name="iTR1701Q38D"], input[name="iTR1701Q38F"], input[name="iTR1701Q38H"], input[name="iTR1701Q38J"], input[name="iTR1701Q38L"]').change(function(){
		iTR1701Q38B = getInt($('input[name="iTR1701Q38B"]').val());
		iTR1701Q38D = getInt($('input[name="iTR1701Q38D"]').val());
		iTR1701Q38F = getInt($('input[name="iTR1701Q38F"]').val());
		iTR1701Q38H = getInt($('input[name="iTR1701Q38H"]').val());
		iTR1701Q38J = getInt($('input[name="iTR1701Q38J"]').val());
		iTR1701Q38L = getInt($('input[name="iTR1701Q38L"]').val());
		
		iTR1701Q38N = iTR1701Q38B + iTR1701Q38D + iTR1701Q38F + iTR1701Q38H + iTR1701Q38J + iTR1701Q38L;
		
		$('input[name="iTR1701Q38N"]').val(iTR1701Q38N);
		$('input[name="iTR1701Q38N"]').change();
	});
	
	$('input[name="iTR1701Q37A"], input[name="iTR1701Q38M"]').change(function(){
		iTR1701Q37A = getInt($('input[name="iTR1701Q37A"]').val());
		iTR1701Q38M = getInt($('input[name="iTR1701Q38M"]').val());
		
		iTR1701Q39A = iTR1701Q37A - iTR1701Q38M;
		
		$('input[name="iTR1701Q39A"]').val(iTR1701Q39A);
		$('input[name="iTR1701Q39A"]').change();
	});
	
	$('input[name="iTR1701Q37B"], input[name="iTR1701Q38N"]').change(function(){
		iTR1701Q37B = getInt($('input[name="iTR1701Q37B"]').val());
		iTR1701Q38N = getInt($('input[name="iTR1701Q38N"]').val());
		
		iTR1701Q39B = iTR1701Q37B - iTR1701Q38N;
		
		$('input[name="iTR1701Q39B"]').val(iTR1701Q39B);
		$('input[name="iTR1701Q39B"]').change();
	});
	
	$('input[name="iTR1701Q40A"], input[name="iTR1701Q40C"], input[name="iTR1701Q40E"]').change(function(){
		iTR1701Q40A = getInt($('input[name="iTR1701Q40A"]').val());
		iTR1701Q40C = getInt($('input[name="iTR1701Q40C"]').val());
		iTR1701Q40E = getInt($('input[name="iTR1701Q40E"]').val());
		
		iTR1701Q40G = iTR1701Q40A + iTR1701Q40C + iTR1701Q40E;
		
		$('input[name="iTR1701Q40G"]').val(iTR1701Q40G);
		$('input[name="iTR1701Q40G"]').change();
	});
	
	$('input[name="iTR1701Q40B"], input[name="iTR1701Q40D"], input[name="iTR1701Q40F"]').change(function(){
		iTR1701Q40B = getInt($('input[name="iTR1701Q40B"]').val());
		iTR1701Q40D = getInt($('input[name="iTR1701Q40D"]').val());
		iTR1701Q40F = getInt($('input[name="iTR1701Q40F"]').val());
		
		iTR1701Q40H = iTR1701Q40B + iTR1701Q40D + iTR1701Q40F;
		
		$('input[name="iTR1701Q40H"]').val(iTR1701Q40H);
		$('input[name="iTR1701Q40H"]').change();
	});
	
	$('input[name="iTR1701Q39A"], input[name="iTR1701Q40G"]').change(function(){
		iTR1701Q39A = getInt($('input[name="iTR1701Q39A"]').val());
		iTR1701Q40G = getInt($('input[name="iTR1701Q40G"]').val());
		
		iTR1701Q41A = iTR1701Q39A + iTR1701Q40G;
		
		$('input[name="iTR1701Q41A"]').val(iTR1701Q41A);
		$('input[name="iTR1701Q41A"]').change();
	});
	
	$('input[name="iTR1701Q39B"], input[name="iTR1701Q40H"]').change(function(){
		iTR1701Q39B = getInt($('input[name="iTR1701Q39B"]').val());
		iTR1701Q40H = getInt($('input[name="iTR1701Q40H"]').val());
		
		iTR1701Q41B = iTR1701Q39B + iTR1701Q40H;
		
		$('input[name="iTR1701Q41B"]').val(iTR1701Q41B);
		$('input[name="iTR1701Q41B"]').change();
	});
	
	$('input[name="iTR1701Q41A"], input[name="iTR1701Q41B"]').change(function(){
		iTR1701Q41A = getInt($('input[name="iTR1701Q41A"]').val());
		iTR1701Q41B = getInt($('input[name="iTR1701Q41B"]').val());
		
		iTR1701Q41C = iTR1701Q41A + iTR1701Q41B;
		
		$('input[name="iTR1701Q41C"]').val(iTR1701Q41C);
		$('input[name="iTR1701Q41C"]').change();
	});
	
});