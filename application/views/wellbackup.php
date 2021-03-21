<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editor</title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/grapesjs/dist/css/grapes.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/grapesjs/dist/grapes.min.js"></script>
  <!-- <script src="<?= base_url() ?>assets/plugin/slider/dist/grapesjs-lory-slider.min.js"></script> -->
  <script src="<?= base_url() ?>assets/plugin/code/dist/grapesjs-custom-code.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/grapesjs-plugin-bootstrap/dist/grapesjs-plugin-bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/grapesjs-plugin-carousel/dist/grapesjs-plugin-carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/grapesjs-swiper-slider/dist/grapesjs-swiper-slider.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/grapesjs-style-gradient/dist/grapesjs-style-gradient.min.js"></script>
</head>
<body>
	<style>


    body,
    html {
      height: 100%;
      margin: 0;
    }
    .panel__top {
      padding: 0;
      width: 100%;
      display: flex;
      position: initial;
      justify-content: center;
      justify-content: space-between;
    }

    .panel__basic-actions {
      position: fixed;
      z-index: 999;
      left: 125px;
    }
  </style>
	<div class="panel__top">
    	<div class="panel__basic-actions"></div>
  	</div>
	<div id="gjs">
		
	</div>
	<script type="text/javascript">
    var idbuuild = "<?= generate_session('buildid'); ?>";
    var editor = grapesjs.init({
      showOffsets: 1,
      noticeOnUnload: 0,
      container: '#gjs',
      height: '100%',
      fromElement: true,
      storageManager: { autoload: 1 },
      plugins: ['grapesjs-custom-code', 'grapesjs-plugin-bootstrap', 'grapesjs-swiper-slider', 'grapesjs-style-gradient'],
      storageManager: {
        type: 'remote',
        stepsBeforeSave: 1,
        autosave: true,         // Store data automatically
        autoload: true,
        urlLoad: '<?= site_url() ?>/admin/page/laodpage/'+idbuuild,
        urlStore: '<?= site_url() ?>/admin/page/savepages/'+idbuuild,
        // ContentType: 'application/json',
        // For custom parameters/headers on requests
        //params: { _some_token: '....' },
        contentTypeJson: true,
        storeComponents: true,
        storeStyles: true,
        storeHtml: true,
        storeCss: true,
        storeJs: true,
        headers: {
        'Content-Type': 'application/json'
        },
        json_encode:{
        "gjs-html": [],
        "gjs-css": [],
        "gjs-js": [],
        }
      //headers: { Authorization: 'Basic ...' },
      },
      cssComposer: { important: true },
      allowScripts: 1,
      styleManager: {
        sectors: [
          {
            name: 'General',
            open: false,
            buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom']
          }, {
            name: 'Flex',
            open: false,
            buildProps: ['flex-direction', 'flex-wrap', 'justify-content', 'align-items', 'align-content', 'order', 'flex-basis', 'flex-grow', 'flex-shrink', 'align-self']
          }, {
            name: 'Dimension',
            open: false,
            buildProps: ['width', 'height', 'max-width', 'min-height', 'margin', 'padding'],
          }, {
            name: 'Typography',
            open: false,
            buildProps: ['font-family', 'font-size', 'font-weight', 'letter-spacing', 'color', 'line-height', 'text-shadow'],
          }, {
            name: 'Decorations',
            open: false,
            buildProps: ['border-radius-c', 'background-color', 'border-radius', 'border', 'box-shadow', 'background'],
          }, {
            name: 'Extra',
            open: false,
            buildProps: ['transition', 'perspective', 'transform'],
          }
        ],
      },
      canvas: {
        styles: [
          'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css',
		      'https://www.w3schools.com/w3css/4/w3.css',
        ],
        scripts: [
          '<?= base_url()?>assets/jquery/jquery.min.js',
          'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js',
        ]
      }
    });
    // save panel --------------------------------------------------////
    editor.Panels.addPanel({
      id: 'basic-actions',
      el: '.panel__basic-actions',
      buttons: [
        {
          id: 'alert-button',
          className: 'btn-alert-button',
          label: '<i class="fa fa-save"></i> <span style="font-size: 14px;">Save</span>',
          command(editor) {
            const html = editor.getHtml();
            var css = editor.getCss();
            var js = editor.getJs();
            $.ajax({
                url: "<?= base_url()?>admin/page/savepage/"+idbuuild,
                method: "POST",
                dataType: "text",
                data: {
                    html: html,
                    css: css,
                    js: js
                },success:function(e){
                  alert('disimpan')
                }
            })
          }
        }
      ]
    });
    // -------------------------------------- panel end save -----------------------------////
    
    // editor.getComponents().add('<link rel="stylesheet" href="http://ejob.medcon.co.id/mc_asset_halaman/materialize/css/materialize.min.css">');
    // editor.getComponents().add('<link rel="stylesheet" href="http://ejob.medcon.co.id/mc_asset_halaman/materialize/icon/icon.css">');

	// editor.BlockManager.add('testBlockNav', {
  //     label: 'navbar',
  //     attributes: { class: 'fa fa-bars' },
  //     content: `
	// 	<nav class="navbar navbar-expand-sm navbar-light bg-light">
	// 		<a class="navbar-brand" href="#">Navbar</a>
	// 		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
	// 			aria-expanded="false" aria-label="Toggle navigation">
	// 			<span class="navbar-toggler-icon"></span>
	// 		</button>
	// 		<div class="collapse navbar-collapse" id="collapsibleNavId">
	// 			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	// 				<li class="nav-item active">
	// 					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	// 				</li>
	// 				<li class="nav-item">
	// 					<a class="nav-link" href="#">Link</a>
	// 				</li>
	// 				<li class="nav-item dropdown">
	// 					<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
	// 					<div class="dropdown-menu" aria-labelledby="dropdownId">
	// 						<a class="dropdown-item" href="#">Action 1</a>
	// 						<a class="dropdown-item" href="#">Action 2</a>
	// 					</div>
	// 				</li>
	// 			</ul>
	// 			<form class="form-inline my-2 my-lg-0">
	// 				<input class="form-control mr-sm-2" type="text" placeholder="Search">
	// 				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	// 			</form>
	// 		</div>
	// 	</nav>
	// 	`
  //   })

  //   editor.BlockManager.add('testBlock', {
  //     label: 'Jumbotron',
  //     attributes: { class: 'fa fa-square' },
  //     content: `
	// 	<div class="jumbotron">
	// 		<h1 class="display-3">Jumbo heading</h1>
	// 		<p class="lead">Jumbo helper text</p>
	// 		<hr class="my-2">
	// 		<p>More info</p>
	// 		<p class="lead">
	// 		<a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
	// 		</p>
	// 	</div>
	// 	`
  //   })

  //   editor.BlockManager.add('basicGrid', {
  //     label: 'Basic Grid',
  //     attributes: { class: 'fa fa-th' },
  //     content: `
	// 	<div class="row">
	// 		<div class="col-xs-1-12">
				
	// 		</div>
			
	// 	</div>
	//   `
  //   })

	// editor.BlockManager.add('DoubleGrid', {
  //     label: 'DoubleGrid',
  //     attributes: { class: 'fa fa-th' },
  //     content: `
	// 	<div class="row" style="height:75vh;">
	// 		<div class="col-md-6">
	// 			<span> </span>
	// 		</div>
	// 		<div class="col-md-6">
	// 			<span> </span>
	// 		</div>
	// 	</div>
	//   `
  //   })

	// editor.BlockManager.add('FullGrid', {
  //     label: 'FullGrid',
  //     attributes: { class: 'fa fa-columns' },
  //     content: `
	// 	<div class="row">
	// 		<div class="col-md-12" style="height:100vh;">
				
	// 		</div>
			
	// 	</div>
	//   `
  //   })

  //   editor.BlockManager.add('testBlock3', {
  //     label: 'image',
  //     attributes: { class: 'fa fa-image' },
  //     content: `
  //           <img src="" alt="Gambar"></img>
  //       `
  //   })

	// editor.BlockManager.add('groupCard', {
  //     label: 'groupCard',
  //     attributes: { class: 'fa fa-image' },
  //     content: `
  //           <div class="row">
  //   <div class="col-md-4">
  //       <div class="card">
  //           <img class="card-img-top" src="holder.js/100x180/" alt="">
  //           <div class="card-body">
  //               <h4 class="card-title">Title</h4>
  //               <p class="card-text">Text</p>
  //           </div>
  //       </div>
  //   </div>
  //   <div class="col-md-4">
  //       <div class="card">
  //           <img class="card-img-top" src="holder.js/100x180/" alt="">
  //           <div class="card-body">
  //               <h4 class="card-title">Title</h4>
  //               <p class="card-text">Text</p>
  //           </div>
  //       </div>
  //   </div>
  //   <div class="col-md-4">
  //     <div class="card">
  //         <img class="card-img-top" src="holder.js/100x180/" alt="">
  //         <div class="card-body">
  //             <h4 class="card-title">Title</h4>
  //             <p class="card-text">Text</p>
  //         </div>
  //     </div>
	// </div>
  //       `
  //   })

	// editor.BlockManager.add('grid1',{
	// 	label: 'Single Grid',
	// 	 attributes: { class: 'fa fa-th' },
	// 	 content:`
	// 	 		<div class="row" style="height:150px;">
	// 			 	<div class="col-md-12">
					
	// 				</div>
	// 			 </div>
	// 	 `
	// })

	// editor.BlockManager.add('carousel',{
	// 	label: 'Slider',
	// 	attributes: {class: 'fa fa-image'},
	// 	content:`
	// 	<div id="carouselId" class="carousel slide" data-ride="carousel">
	// 		<ol class="carousel-indicators">
	// 			<li data-target="#carouselId" data-slide-to="0" class="active"></li>
	// 			<li data-target="#carouselId" data-slide-to="1"></li>
	// 			<li data-target="#carouselId" data-slide-to="2"></li>
	// 		</ol>
	// 		<div class="carousel-inner" role="listbox">
	// 			<div class="carousel-item active">
	// 				<img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide">
	// 			</div>
	// 			<div class="carousel-item">
	// 				<img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide">
	// 			</div>
	// 			<div class="carousel-item">
	// 				<img data-src="holder.js/900x500/auto/#666:#444/text:Third slide" alt="Third slide">
	// 			</div>
	// 		</div>
	// 		<a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
	// 			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	// 			<span class="sr-only">Previous</span>
	// 		</a>
	// 		<a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
	// 			<span class="carousel-control-next-icon" aria-hidden="true"></span>
	// 			<span class="sr-only">Next</span>
	// 		</a>
	// 	</div>
	// 	`
	// })
    
  //   const script = function() {

  //     var html = `
  //     <div class="carousel carousel-slider">
  //       <a class="carousel-item" href="#one!"><img src="https://lucyjordanoff.com.au/wp-content/uploads/Banner_web_banners_Lucy_Jordanoff.jpg?x17544"></a>
  //       <a class="carousel-item" href="#two!"><img src="https://lucyjordanoff.com.au/wp-content/uploads/Banner_web_banners_Lucy_Jordanoff.jpg?x17544"></a>
  //       <a class="carousel-item" href="#three!"><img src="https://lucyjordanoff.com.au/wp-content/uploads/Banner_web_banners_Lucy_Jordanoff.jpg?x17544"></a>
  //       <a class="carousel-item" href="#four!"><img src="https://lucyjordanoff.com.au/wp-content/uploads/Banner_web_banners_Lucy_Jordanoff.jpg?x17544"></a>
  //     </div>
      
  //     `;

  //     this.innerHTML = html;

  //     $(document).ready(function(){
  //       $('.carousel.carousel-slider').carousel({
  //         fullWidth: true
  //       });

  //       $('#navIda a').click(e => {
  //         e.preventDefault();
  //         $(this).tab('show');
  //      });

  //     })

  //   };

  //   // Define a new custom component
  //   editor.Components.addType('comp-with-js', {
  //     model: {
  //       defaults: {
  //         script,
  //         style: {}
  //       }
  //     }
  //   });

  //       // Create a block for the component, so we can drop it easily
   
  //   editor.BlockManager.add('fullblock', {
  //     label: 'full contain',
  //     attributes: { class: 'fa fa-list' },
  //     content: `
	// 	<div class="row">
	// 		<div class="col md-12">
	// 			<div class="card">
	// 				<img class="card-img-top" src="holder.js/100x180/" alt="">
	// 				<div class="card-body">
	// 					<h4 class="card-title">Title</h4>
	// 					<p class="card-text">Text</p>
	// 				</div>
	// 			</div>
	// 		</div>
	// 	</div>
  //       `
  //   })

  //   editor.BlockManager.add('Button',{
  //     label: 'Button',
  //     attributes: { class: 'fa fa-btn'},
  //     content:`
  //       <button class="btn btn-primary"> Input Button Here </button>
  //     `
  //   })

  //   editor.BlockManager.add('ButtonGroup',{
  //     label: 'ButtonGroup',
  //     attributes: { class: 'fa fa-button'},
  //     content:`
  //         <div class="btn-group" role="group" aria-label="">
  //             <button type="button" class="btn btn-primary">Input Button Here</button>
  //             <button type="button" class="btn btn-primary">Input Button Here</button>
  //             <button type="button" class="btn btn-primary">Input Button Here</button>
  //         </div>
  //     `
  //   })

  //   editor.BlockManager.add('Dropdowns',{
  //     label: 'Dropdowns',
  //     attributes: { class: 'fa fa-nav'},
  //     content:`
  //   <div class="dropdown">
  //         <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
  //                 aria-expanded="false">
  //                     Dropdown
  //                 </button>
  //         <div class="dropdown-menu" aria-labelledby="triggerId">
  //             <a class="dropdown-item" href="#">Action</a>
  //             <a class="dropdown-item disabled" href="#">Disabled action</a>
  //             <h6 class="dropdown-header">Section header</h6>
  //             <a class="dropdown-item" href="#">Action</a>
  //             <div class="dropdown-divider"></div>
  //             <a class="dropdown-item" href="#">After divider action</a>
  //         </div>
  //   </div>
  //     `
  //   })

  //   editor.BlockManager.add('Navs',{
  //     label: 'Navs',
  //     attributes: { class: 'fa fa-list'},
  //     content:`
  //         <!-- Nav tabs -->
  //         <ul class="nav nav-tabs" id="navIda">
  //             <li class="nav-item">
  //                 <a href="#tab1Id" class="nav-link active">Active</a>
  //             </li>
  //             <li class="nav-item dropdown">
  //                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
  //                 <div class="dropdown-menu">
  //                     <a class="dropdown-item" href="#tab2Id">Action</a>
  //                     <a class="dropdown-item" href="#tab3Id">Another action</a>
  //                     <div class="dropdown-divider"></div>
  //                     <a class="dropdown-item" href="#tab4Id">Action</a>
  //                 </div>
  //             </li>
  //             <li class="nav-item">
  //                 <a href="#tab5Id" class="nav-link">Another link</a>
  //             </li>
  //             <li class="nav-item">
  //                 <a href="#" class="nav-link disabled">Disabled</a>
  //             </li>
  //         </ul>

  //         <!-- Tab panes -->
  //         <div class="tab-content">
  //             <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
  //             <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
  //             <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
  //             <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
  //             <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
  //         </div>

  //     `
  //   })

  //   editor.BlockManager.add('Breadcumb',{
  //     label: 'Breadcumb',
  //     attributes: { class: 'fa fa-button'},
  //     content:`
  //       <nav class="breadcrumb">
  //           <a class="breadcrumb-item" href="#">This is link</a>
  //           <a class="breadcrumb-item" href="#">This is link 2</a>
  //           <span class="breadcrumb-item active">Actived Link</span>
  //       </nav>
  //     `
  //   })

  //   editor.BlockManager.add('ButtonGroup',{
  //     label: 'ButtonGroup',
  //     attributes: { class: 'fa fa-button'},
  //     content:`
      
  //     `
  //   })

  //   editor.BlockManager.add('Pagination',{
  //     label: 'Pagination',
  //     attributes: { class: 'fa fa-button'},
  //     content:`
  //         <nav aria-label="Page navigation">
  //           <ul class="pagination">
  //             <li class="page-item disabled">
  //               <a class="page-link" href="#" aria-label="Previous">
  //                 <span aria-hidden="true">&laquo;</span>
  //                 <span class="sr-only">Previous</span>
  //               </a>
  //             </li>
  //             <li class="page-item active"><a class="page-link" href="#">1</a></li>
  //             <li class="page-item"><a class="page-link" href="#">2</a></li>
  //             <li class="page-item"><a class="page-link" href="#">3</a></li>
  //             <li class="page-item"><a class="page-link" href="#">4</a></li>
  //             <li class="page-item"><a class="page-link" href="#">5</a></li>
  //             <li class="page-item">
  //               <a class="page-link" href="#" aria-label="Next">
  //                 <span aria-hidden="true">&raquo;</span>
  //                 <span class="sr-only">Next</span>
  //               </a>
  //             </li>
  //           </ul>
  //         </nav>
  //     `
  //   })

  //   editor.BlockManager.add('Label',{
  //     label: 'Label',
  //     attributes: { class: 'fa fa-text'},
  //     content:`
  //         <p> This Is Label Text </p>
  //     `
  //   })

  //   editor.BlockManager.add('Badge',{
  //     label: 'Badge',
  //     attributes: { class: 'fa fa-button'},
  //     content:`
  //         <span class="badge badge-primary">This is Badge Component</span>
  //     `
  //   })

  //   editor.BlockManager.add('Page_header',{
  //     label: 'Page_header',
  //     attributes: { class: 'fa fa-button'},
  //     content:`
  //     <div class="row">
  //         <div class="col-md-12">
  //           <div class="page-header">
  //             <h1>
  //               Header! <small>Detail Header Text</small>
  //             </h1>
  //           </div>
  //         </div>
  //     </div>
  //     `
  //   })
    
  //   editor.BlockManager.add('MediaObject',{
  //     label: 'MediaObject',
  //     attributes: { class: 'fa fa-button'},
  //     content:`
  //       <div class="media">
  //           <a class="d-flex" href="#">
  //               <img src="" alt="">
  //           </a>
  //           <div class="media-body">
  //               <h5>Media heading</h5>
  //               Media text
  //           </div>
  //       </div>
  //     `
  //   })

  //   editor.BlockManager.add('ProgrresBar',{
  //     label: 'ProgrresBar',
  //     attributes: { class: 'fa fa-button'},
  //     content:`
  //       <div class="progress">
  //           <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Description</div>
  //       </div>
  //     `
  //   })

  </script>
  
</body>
</html>