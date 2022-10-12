function ConversorArea(fuenteid,valNum) {
  valNum = parseFloat(valNum);
  var inputVaras = document.getElementById("inputVaras");
  var inputMetros = document.getElementById("inputMetros");
  var inputPies = document.getElementById("inputPies");
  var inputManzana = document.getElementById("inputManzana");
  var inputAcres = document.getElementById("inputAcres");
  var inputHectarea = document.getElementById("inputHectarea");
  
  if (fuenteid=="inputVaras") {
    inputMetros.value=(valNum*0.6988);
    inputPies.value=(valNum*7.52);
    inputManzana.value=(valNum*0.0001);
    inputAcres.value=(valNum*0.0001726);
    inputHectarea.value=(valNum*0.0000698);        
  }
  if (fuenteid=="inputMetros") {
    inputVaras.value=(valNum*1.4308);
    inputPies.value=(valNum*10.7639);
    inputManzana.value=(valNum*0.0001431);
    inputAcres.value=(valNum*0.0002471);
    inputHectarea.value=(valNum*0.0001);        
  }
  if (fuenteid=="inputPies") {
    inputVaras.value=(valNum*0.1329421);
    inputMetros.value=(valNum*0.0929);
    inputManzana.value=(valNum*0.0000132);
    inputAcres.value=(valNum*0.0000229);    
    inputHectarea.value=(valNum*0.0000092);
    
  }
  if (fuenteid=="inputManzana") {
    inputVaras.value=(valNum*10000);
    inputMetros.value=(valNum*6988);
    inputPies.value=(valNum*75220.68);
    inputAcres.value=(valNum*1.72677);    
    inputHectarea.value=(valNum*0.6988);
    
  }
  if (fuenteid=="inputAcres") {
    inputVaras.value=(valNum*5791.21);
    inputMetros.value=(valNum*4046.825);
    inputPies.value=(valNum*43561.89);
	inputManzana.value=(valNum*0.57912);
	inputHectarea.value=(valNum*0.4046863);    
  }
  if (fuenteid=="inputHectarea") {
    inputVaras.value=(valNum*14310.25);
    inputMetros.value=(valNum*10000);
    inputPies.value=(valNum*107642.62);
	inputManzana.value=(valNum*1.43102);
    inputAcres.value=(valNum*2.43102);
  }  
 } 


function lengthConverter(source,valNum) {
  valNum = parseFloat(valNum);
  var inputFeet = document.getElementById("inputFeet");
  var inputMeters = document.getElementById("inputMeters");
  var inputInches = document.getElementById("inputInches");
  var inputcm = document.getElementById("inputcm");
  var inputYards = document.getElementById("inputYards");
  var inputKilometers = document.getElementById("inputKilometers");
  var inputMiles = document.getElementById("inputMiles");  
  if (source=="inputFeet") {
    inputMeters.value=(valNum/3.2808).toFixed(2);
    inputInches.value=(valNum*12).toFixed(2);
    inputcm.value=(valNum/0.032808).toFixed();
    inputYards.value=(valNum*0.33333).toFixed(2);
    inputKilometers.value=(valNum/3280.8).toFixed(5);    
    inputMiles.value=(valNum*0.00018939).toFixed(5);
  }
  if (source=="inputMeters") {
    inputFeet.value=(valNum*3.2808).toFixed(2);
    inputInches.value=(valNum*39.370).toFixed(2);
    inputcm.value=(valNum/0.01).toFixed();
    inputYards.value=(valNum*1.0936).toFixed(2);
    inputKilometers.value=(valNum/1000).toFixed(5);    
    inputMiles.value=(valNum*0.00062137).toFixed(5);
  }
  if (source=="inputInches") {
    inputFeet.value=(valNum*0.083333).toFixed(3);
    inputMeters.value=(valNum/39.370).toFixed(3);
    inputcm.value=(valNum/0.39370).toFixed(2);
    inputYards.value=(valNum*0.027778).toFixed(3);    
    inputKilometers.value=(valNum/39370).toFixed(6);
    inputMiles.value=(valNum*0.000015783).toFixed(6);
  }
  if (source=="inputcm") {
    inputFeet.value=(valNum*0.032808).toFixed(3);
    inputMeters.value=(valNum/100).toFixed(3);
    inputInches.value=(valNum*0.39370).toFixed(2);
    inputYards.value=(valNum*0.010936).toFixed(3);    
    inputKilometers.value=(valNum/100000).toFixed(6);
    inputMiles.value=(valNum*0.0000062137).toFixed(6);
  }
  if (source=="inputYards") {
    inputFeet.value=(valNum*3).toFixed();
    inputMeters.value=(valNum/1.0936).toFixed(2);
    inputInches.value=(valNum*36).toFixed();
    inputcm.value=(valNum/0.010936).toFixed();
    inputKilometers.value=(valNum/1093.6).toFixed(5);
    inputMiles.value=(valNum*0.00056818).toFixed(5);
  }
  if (source=="inputKilometers") {
    inputFeet.value=(valNum*3280.8).toFixed();
    inputMeters.value=(valNum*1000).toFixed();
    inputInches.value=(valNum*39370).toFixed();
    inputcm.value=(valNum*100000).toFixed();
    inputYards.value=(valNum*1093.6).toFixed();
    inputMiles.value=(valNum*0.62137).toFixed(2);    
  }
  if (source=="inputMiles") {
    inputFeet.value=(valNum*5280).toFixed();
    inputMeters.value=(valNum/0.00062137).toFixed();
    inputInches.value=(valNum*63360).toFixed();
    inputcm.value=(valNum/0.0000062137).toFixed();
    inputYards.value=(valNum*1760).toFixed();
    inputKilometers.value=(valNum/0.62137).toFixed(2);    
  }
 }