<?php
class Conversor_Areas_Br_Widget extends \Elementor\Widget_Base {
 
    public function get_name() {
        return 'artisansweb-carousel';
    }
 
    public function get_title() {
        return __( 'Conversor Áreas', 'conversor-areas-br-elementor-add-on' );
    }
 
    public function get_icon() {
        return 'fa fa-calculator';
    }
 
    public function get_categories() {
        return [ 'general' ];
    }
 
    protected function _register_controls() {
 
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'conversor-areas-br-elementor-add-on' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
 
		
 
		$this->add_control(
			'important_note',
			[
				'label' => __( 'Convertidor Áreas 1.0', 'conversor-areas-br-elementor-add-on' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => __( '', 'conversor-areas-br-elementor-add-on' ),
				'content_classes' => 'your-class',
			]
		);
 
 
		$this->add_control(
			'widget_title',
			[
				'label' => __( 'Titulo', 'conversor-areas-br-elementor-add-on' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Convertidor de áreas', 'conversor-areas-br-elementor-add-on' ),
				'placeholder' => __( 'Digita titulo aquí', 'conversor-areas-br-elementor-add-on' ),
			]
		);
 
        
 
        $this->end_controls_section();
 
    }
     
    protected function render() {
	$settings = $this->get_settings_for_display();  
	
	?>
	<div style="background:#F1F1F1;padding:10px;border: 6px solid #F0D774;border-radius: 25px;padding:20px;">
	
	<div class="d-flex justify-content-center p-0 pb-3 ">
		 <div><img class="img-responsive" src="<?php echo WP_PLUGIN_URL  . '/calcbienesraices/assets/imgs/porta-logo.png';?>" width="130" height="57"></div>		 
	</div>
	
	<div class="d-flex justify-content-center p-0 pb-3 ">
		 <div><span class="h1 font-general titular"><?php echo $settings['widget_title']?></span></div>		 
	</div>
	
	<!--<div class="d-flex flex-column justify-content-left p-0 ">
		 <div><span class="h3 font-general conver-indicaciones">Indicaciones:</span></div>		 		 
		 <div><p class="font-general conver-head">Escribe la cantidad que ya tengas en la unidad de medida correspondiente, y automáticamente tendrás la equivalencia de esa cantidad en las demás unidades de área.</p>
		</div>	
	</div>-->
	
	<div class="d-flex align-items-center pl-0 pr-0 pt-4 pb-3">
				  <!--<div class="col-1 pl-0 pr-1 h5"><span>1.</span></div>-->
				  <div class="col-8 pl-0 pr-1"><input class="form-control input-sm input-conver" id="inputVaras" type="number" placeholder="Varas" oninput="ConversorArea(this.id,this.value)" onchange="ConversorArea(this.id,this.value)"></div>
				  <div class="col-4 pl-4 pr-0 h5 font-tip-area">Varas² - <span class="h3 font-simbol-area">v²</span></div>				  
	</div>
	<div class="d-flex align-items-center pl-0 pr-0 pt-0 pb-3">
				  <!--<div class="col-1 pl-0 pr-1 h5"><span>2.</span></div>-->
				  <div class="col-8 pl-0 pr-1"><input class="form-control input-sm input-conver" id="inputMetros" class="w3-input w3-border" type="number" placeholder="Metros" oninput="ConversorArea(this.id,this.value)" onchange="ConversorArea(this.id,this.value)"></div>
				  <div class="col-4 pl-4 pr-0 h5 font-tip-area">Metros² - <span class="h3 font-simbol-area">m²</span></div>				  
	</div>
	
	<div class="d-flex align-items-center pl-0 pr-0 pt-0 pb-3">
				  <!--<div class="col-1 pl-0 pr-1 h5"><span>3.</span></div>-->
				  <div class="col-8 pl-0 pr-1"><input class="form-control input-sm input-conver" id="inputPies" class="w3-input w3-border" type="number" placeholder="Pies" oninput="ConversorArea(this.id,this.value)" onchange="ConversorArea(this.id,this.value)"></div>
				  <div class="col-4 pl-4 pr-0 h5 font-tip-area">Pies² - <span class="h3 font-simbol-area">ft²</span></div>				  
	</div>
	
	<div class="d-flex align-items-center pl-0 pr-0 pt-0 pb-3">
				  <!--<div class="col-1 pl-0 pr-1 h5"><span>4.</span></div>-->
				  <div class="col-8 pl-0 pr-1"><input class="form-control input-sm input-conver" id="inputManzana" class="w3-input w3-border" type="number" placeholder="Manzanas" oninput="ConversorArea(this.id,this.value)" onchange="ConversorArea(this.id,this.value)"></div>
				  <div class="col-4 pl-4 pr-0 h5 font-tip-area">Manzanas - <span class="h3 font-simbol-area">mz</span></div>				  
	</div>
	
	<div class="d-flex align-items-center pl-0 pr-0 pt-0 pb-3">
				  <!--<div class="col-1 pl-0 pr-1 h5"><span>5.</span></div>-->
				  <div class="col-8 pl-0 pr-1"><input class="form-control input-sm input-conver" id="inputAcres" class="w3-input w3-border" type="number" placeholder="Acres" oninput="ConversorArea(this.id,this.value)" onchange="ConversorArea(this.id,this.value)"></div>
				  <div class="col-4 pl-4 pr-0 h5 font-tip-area">Acres - <span class="h3 font-simbol-area">ac</span></div>				  
	</div>
	
	<div class="d-flex align-items-center pl-0 pr-0 pt-0 pb-3">
				  <!--<div class="col-1 pl-0 pr-1 h5"><span>6.</span></div>-->
				  <div class="col-8 pl-0 pr-1"><input class="form-control input-conver" id="inputHectarea" class="w3-input w3-border" type="number" placeholder="Hectáreas" oninput="ConversorArea(this.id,this.value)" onchange="ConversorArea(this.id,this.value)"></div>
				  <div class="col-4 pl-4 pr-0 h5 font-tip-area">Hectáreas - <span class="h3 font-simbol-area">ha</span></div>				  
	</div>

	<div class="d-flex justify-content-center pt-4 pr-0 pl-0 pb-0">
		 <div><span class="h5 font-general font-pie">*Nota: El Convertidor de Áreas provee un resultado que refleja el 99.99% de exactitud.</span></div>		 
	</div>		
	
	</div>
	
	<?php }
}