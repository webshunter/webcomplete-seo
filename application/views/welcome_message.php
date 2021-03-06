<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editor</title>
  <link rel="icon" type="image/png" href="<?= base_url('assets/logo.png')?>" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/grapesjs/dist/css/grapes.min.css">

   <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/toastr.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/grapesjs-preset-webpage.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/tooltip.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/grapesjs-plugin-filestack.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/demos.css">
    <link href="https://unpkg.com/grapick/dist/grapick.min.css" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/toastr.min.js"></script>
	<script src="<?= base_url() ?>assets/grapesjs/dist/grapes.min.js"></script>

  <script src="<?= base_url() ?>assets/plugin/grapesjs-preset-webpage.min.js"></script>
    <script src="<?= base_url() ?>assets/plugin/grapesjs-lory-slider.min.js"></script>
    <script src="<?= base_url() ?>assets/plugin/grapesjs-tabs.min.js"></script>
    <script src="<?= base_url() ?>assets/plugin/grapesjs-custom-code.min.js"></script>
    <script src="<?= base_url() ?>assets/plugin/grapesjs-touch.min.js"></script>
    <script src="<?= base_url() ?>assets/plugin/grapesjs-parser-postcss.min.js"></script>
    <script src="<?= base_url() ?>assets/plugin/grapesjs-tooltip.min.js"></script>
    <script src="<?= base_url() ?>assets/plugin/grapesjs-tui-image-editor.min.js"></script>
    <script src="<?= base_url() ?>assets/plugin/grapesjs-typed.min.js"></script>
    <script src="<?= base_url() ?>assets/plugin/grapesjs-style-bg.min.js"></script>


  <!-- <script src="<?= base_url() ?>assets/plugin/slider/dist/grapesjs-lory-slider.min.js"></script> -->
  <script src="<?= base_url() ?>assets/plugin/code/dist/grapesjs-custom-code.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/grapesjs-plugin-bootstrap/dist/grapesjs-plugin-bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/grapesjs-plugin-carousel/dist/grapesjs-plugin-carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/grapesjs-swiper-slider/dist/grapesjs-swiper-slider.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/grapesjs-style-gradient/dist/grapesjs-style-gradient.min.js"></script>

    <style type="text/css">
        .icon-add-comp::before, .icon-comp100::before,.icon-comp50::before,.icon-comp30::before,.icon-rm::before{ content: '';}
        .icon-add-comp {
          background: url("./img/icon-sq-a.png") no-repeat center;
        }
        .icon-comp100 {
          background: url("./img/icon-sq-1.png") no-repeat center;
        }
        .icon-comp50 {
          background: url("./img/icon-sq-2.png") no-repeat center;
        }
        .icon-comp30 {
          background: url("./img/icon-sq-3.png") no-repeat center;
        }
        .icon-rm {
          background: url("./img/icon-sq-r.png") no-repeat center;
        }

        .icons-flex {
          background-size: 70% 65% !important;
          height: 15px;
          width: 17px;
          opacity: 0.9;
        }
        .icon-dir-row {
          background: url("./img/flex-dir-row.png") no-repeat center;
        }
        .icon-dir-row-rev {
          background: url("./img/flex-dir-row-rev.png") no-repeat center;
        }
        .icon-dir-col {
          background: url("./img/flex-dir-col.png") no-repeat center;
        }
        .icon-dir-col-rev {
          background: url("./img/flex-dir-col-rev.png") no-repeat center;
        }
        .icon-just-start{
         background: url("./img/flex-just-start.png") no-repeat center;
        }
        .icon-just-end{
         background: url("./img/flex-just-end.png") no-repeat center;
        }
        .icon-just-sp-bet{
         background: url("./img/flex-just-sp-bet.png") no-repeat center;
        }
        .icon-just-sp-ar{
         background: url("./img/flex-just-sp-ar.png") no-repeat center;
        }
        .icon-just-sp-cent{
         background: url("./img/flex-just-sp-cent.png") no-repeat center;
        }
        .icon-al-start{
         background: url("./img/flex-al-start.png") no-repeat center;
        }
        .icon-al-end{
         background: url("./img/flex-al-end.png") no-repeat center;
        }
        .icon-al-str{
         background: url("./img/flex-al-str.png") no-repeat center;
        }
        .icon-al-center{
         background: url("./img/flex-al-center.png") no-repeat center;
        }

         [data-tooltip]::after {
           background: rgba(51, 51, 51, 0.9);
         }

         .gjs-pn-commands {
           min-height: 40px;
         }

         #gjs-sm-float,
         .gjs-pn-views .fa-cog {
            display: none;
         }

         .gjs-am-preview-cont {
           height: 100px;
           width: 100%;
         }

         .gjs-logo-version {
           background-color: #756467;
         }

        .gjs-pn-panel.gjs-pn-views {
          padding: 0;
          border-bottom: none;
        }

        .gjs-pn-btn.gjs-pn-active {
          box-shadow: none;
        }

        .gjs-pn-views .gjs-pn-btn {
            margin: 0;
            height: 40px;
            padding: 10px;
            width: 33.3333%;
            border-bottom: 2px solid rgba(0, 0, 0, 0.3);
        }

        .CodeMirror {
          min-height: 450px;
          margin-bottom: 8px;
        }
        .grp-handler-close {
          background-color: transparent;
          color: #ddd;
        }

        .grp-handler-cp-wrap {
          border-color: transparent;
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
</head>
<body>
	


        <div style="display: none">
      <div class="gjs-logo-cont">
        <a href="https://grapesjs.com"><img class="gjs-logo" src=""></a>
        <div class="gjs-logo-version"></div>
      </div>
    </div>
    <div class="ad-cont">
      <!-- <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=grapesjscom" id="_carbonads_js"></script> -->
      <div id="native-carbon"></div>
    </div>
<div class="panel__top">
    	<div class="panel__basic-actions"></div>
  	</div>
    <div id="gjs" style="height:0px; overflow:hidden">
      <?php 
      $id = generate_session('buildid');
        if (isset($id)) {
            echo '<style>';
            if (file_exists('page/pagecss'.$id.'.tmp')) {
                echo ffread('page/pagecss'.$id.'.tmp');
            }
            echo '</style>';
            if (file_exists('page/page'.$id.'.tmp')) {
                $html = ffread('page/page'.$id.'.tmp');
                $html = str_replace('{{slider}}', Form::slider(), $html);
                // cek apakah tipe_doc ada
                $cekslider = $this->db->query("SELECT * FROM page WHERE id = '$id' ")->row();
                $tipe_doc = $cekslider->tipe_doc;
                // cek 
                if ($tipe_doc != "") {
                    
                    // baca semua artikel yang didapat dengan tipe yang sama
                    $listd = $this->db->query("SELECT * FROM page WHERE type = '' AND position = '' AND tipe_doc = '$tipe_doc' ")->result();

                    $createlist = "<ul class=\"nav nav-pills nav-stacked\">";
                    foreach ($listd as $key => $value) {
                        $createlist .= "<li><a href='".site_url('pages/id/'.$value->slug)."'>$value->judul</a></li>";
                    }
                    $createlist .= "</ul>";

                    $html = str_replace('{{artikel}}', $createlist, $html);



                }
                echo $html;
            }
            echo '<script>';
                if (file_exists('page/pagejs'.$id.'.tmp')) {
                    echo ffread('page/pagejs'.$id.'.tmp');
                }
                echo '</script>';
        }
    ?>
    </div>

    <form id="savepages" style="display: none;" action="<?= site_url('admin/page/savepage/'.generate_session('buildid')) ?>" method="post" enctype="multipart/form-data">
      <textarea name="html" id="html" cols="30" rows="10"></textarea>
      <textarea name="css" id="css" cols="30" rows="10"></textarea>
      <textarea name="js" id="js" cols="30" rows="10"></textarea>
    </form>

    <script type="text/javascript">
    
    var idbuuild = "<?= generate_session('buildid'); ?>";
      var lp = './img/';
      var plp = '//placehold.it/350x250/';
      var images = [
        lp+'team1.jpg', lp+'team2.jpg', lp+'team3.jpg', plp+'78c5d6/fff/image1.jpg', plp+'459ba8/fff/image2.jpg', plp+'79c267/fff/image3.jpg',
        plp+'c5d647/fff/image4.jpg', plp+'f28c33/fff/image5.jpg', plp+'e868a2/fff/image6.jpg', plp+'cc4360/fff/image7.jpg',
        lp+'work-desk.jpg', lp+'phone-app.png', lp+'bg-gr-v.png'
      ];

      var editor  = grapesjs.init({
        avoidInlineStyle: true,
        height: '100%',
        container : '#gjs',
        fromElement: 1,
        showOffsets: 1,
        assetManager: {
          embedAsBase64: 1,
          assets: images
        },
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
        selectorManager: { componentFirst: true },
        styleManager: { clearProperties: 1 },
        plugins: [
          'grapesjs-lory-slider',
          'grapesjs-tabs',
          'grapesjs-custom-code',
          'grapesjs-touch',
          'grapesjs-parser-postcss',
          'grapesjs-tooltip',
          'grapesjs-tui-image-editor',
          'grapesjs-typed',
          'grapesjs-style-bg',
          'gjs-preset-webpage',
          'grapesjs-swiper-slider',
          'grapesjs-style-gradient',
          'grapesjs-mjml',
        ],
        pluginsOpts: {
          'grapesjs-mjml': {
            
          },
          'grapesjs-lory-slider': {
            sliderBlock: {
              category: 'Extra'
            }
          },
          'grapesjs-tabs': {
            tabsBlock: {
              category: 'Extra'
            }
          },
          'grapesjs-typed': {
            block: {
              category: 'Extra',
              content: {
                type: 'typed',
                'type-speed': 40,
                strings: [
                  'Text row one',
                  'Text row two',
                  'Text row three',
                ],
              }
            }
          },
          'gjs-preset-webpage': {
            modalImportTitle: 'Import Template',
            modalImportLabel: '<div style="margin-bottom: 10px; font-size: 13px;">Paste here your HTML/CSS and click Import</div>',
            modalImportContent: function(editor) {
              return editor.getHtml() + '<style>'+editor.getCss()+'</style>'
            },
            filestackOpts: null, //{ key: 'AYmqZc2e8RLGLE7TGkX3Hz' },
            aviaryOpts: false,
            blocksBasicOpts: { flexGrid: 1 },
            customStyleManager: [{
              name: 'General',
              buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom'],
              properties:[{
                  name: 'Alignment',
                  property: 'float',
                  type: 'radio',
                  defaults: 'none',
                  list: [
                    { value: 'none', className: 'fa fa-times'},
                    { value: 'left', className: 'fa fa-align-left'},
                    { value: 'right', className: 'fa fa-align-right'}
                  ],
                },
                { property: 'position', type: 'select'}
              ],
            },{
                name: 'Dimension',
                open: false,
                buildProps: ['width', 'flex-width', 'height', 'max-width', 'min-height', 'margin', 'padding'],
                properties: [{
                  id: 'flex-width',
                  type: 'integer',
                  name: 'Width',
                  units: ['px', '%'],
                  property: 'flex-basis',
                  toRequire: 1,
                },{
                  property: 'margin',
                  properties:[
                    { name: 'Top', property: 'margin-top'},
                    { name: 'Right', property: 'margin-right'},
                    { name: 'Bottom', property: 'margin-bottom'},
                    { name: 'Left', property: 'margin-left'}
                  ],
                },{
                  property  : 'padding',
                  properties:[
                    { name: 'Top', property: 'padding-top'},
                    { name: 'Right', property: 'padding-right'},
                    { name: 'Bottom', property: 'padding-bottom'},
                    { name: 'Left', property: 'padding-left'}
                  ],
                }],
              },{
                name: 'Typography',
                open: false,
                buildProps: ['font-family', 'font-size', 'font-weight', 'letter-spacing', 'color', 'line-height', 'text-align', 'text-decoration', 'text-shadow'],
                properties:[
                  { name: 'Font', property: 'font-family'},
                  { name: 'Weight', property: 'font-weight'},
                  { name:  'Font color', property: 'color'},
                  {
                    property: 'text-align',
                    type: 'radio',
                    defaults: 'left',
                    list: [
                      { value : 'left',  name : 'Left',    className: 'fa fa-align-left'},
                      { value : 'center',  name : 'Center',  className: 'fa fa-align-center' },
                      { value : 'right',   name : 'Right',   className: 'fa fa-align-right'},
                      { value : 'justify', name : 'Justify',   className: 'fa fa-align-justify'}
                    ],
                  },{
                    property: 'text-decoration',
                    type: 'radio',
                    defaults: 'none',
                    list: [
                      { value: 'none', name: 'None', className: 'fa fa-times'},
                      { value: 'underline', name: 'underline', className: 'fa fa-underline' },
                      { value: 'line-through', name: 'Line-through', className: 'fa fa-strikethrough'}
                    ],
                  },{
                    property: 'text-shadow',
                    properties: [
                      { name: 'X position', property: 'text-shadow-h'},
                      { name: 'Y position', property: 'text-shadow-v'},
                      { name: 'Blur', property: 'text-shadow-blur'},
                      { name: 'Color', property: 'text-shadow-color'}
                    ],
                }],
              },{
                name: 'Decorations',
                open: false,
                buildProps: ['opacity', 'border-radius', 'border', 'box-shadow', 'background-bg'],
                properties: [{
                  type: 'slider',
                  property: 'opacity',
                  defaults: 1,
                  step: 0.01,
                  max: 1,
                  min:0,
                },{
                  property: 'border-radius',
                  properties  : [
                    { name: 'Top', property: 'border-top-left-radius'},
                    { name: 'Right', property: 'border-top-right-radius'},
                    { name: 'Bottom', property: 'border-bottom-left-radius'},
                    { name: 'Left', property: 'border-bottom-right-radius'}
                  ],
                },{
                  property: 'box-shadow',
                  properties: [
                    { name: 'X position', property: 'box-shadow-h'},
                    { name: 'Y position', property: 'box-shadow-v'},
                    { name: 'Blur', property: 'box-shadow-blur'},
                    { name: 'Spread', property: 'box-shadow-spread'},
                    { name: 'Color', property: 'box-shadow-color'},
                    { name: 'Shadow type', property: 'box-shadow-type'}
                  ],
                },{
                  id: 'background-bg',
                  property: 'background',
                  type: 'bg',
                },],
              },{
                name: 'Extra',
                open: false,
                buildProps: ['transition', 'perspective', 'transform'],
                properties: [{
                  property: 'transition',
                  properties:[
                    { name: 'Property', property: 'transition-property'},
                    { name: 'Duration', property: 'transition-duration'},
                    { name: 'Easing', property: 'transition-timing-function'}
                  ],
                },{
                  property: 'transform',
                  properties:[
                    { name: 'Rotate X', property: 'transform-rotate-x'},
                    { name: 'Rotate Y', property: 'transform-rotate-y'},
                    { name: 'Rotate Z', property: 'transform-rotate-z'},
                    { name: 'Scale X', property: 'transform-scale-x'},
                    { name: 'Scale Y', property: 'transform-scale-y'},
                    { name: 'Scale Z', property: 'transform-scale-z'}
                  ],
                }]
              },{
                name: 'Flex',
                open: false,
                properties: [{
                  name: 'Flex Container',
                  property: 'display',
                  type: 'select',
                  defaults: 'block',
                  list: [
                    { value: 'block', name: 'Disable'},
                    { value: 'flex', name: 'Enable'}
                  ],
                },{
                  name: 'Flex Parent',
                  property: 'label-parent-flex',
                  type: 'integer',
                },{
                  name      : 'Direction',
                  property  : 'flex-direction',
                  type    : 'radio',
                  defaults  : 'row',
                  list    : [{
                            value   : 'row',
                            name    : 'Row',
                            className : 'icons-flex icon-dir-row',
                            title   : 'Row',
                          },{
                            value   : 'row-reverse',
                            name    : 'Row reverse',
                            className : 'icons-flex icon-dir-row-rev',
                            title   : 'Row reverse',
                          },{
                            value   : 'column',
                            name    : 'Column',
                            title   : 'Column',
                            className : 'icons-flex icon-dir-col',
                          },{
                            value   : 'column-reverse',
                            name    : 'Column reverse',
                            title   : 'Column reverse',
                            className : 'icons-flex icon-dir-col-rev',
                          }],
                },{
                  name      : 'Justify',
                  property  : 'justify-content',
                  type    : 'radio',
                  defaults  : 'flex-start',
                  list    : [{
                            value   : 'flex-start',
                            className : 'icons-flex icon-just-start',
                            title   : 'Start',
                          },{
                            value   : 'flex-end',
                            title    : 'End',
                            className : 'icons-flex icon-just-end',
                          },{
                            value   : 'space-between',
                            title    : 'Space between',
                            className : 'icons-flex icon-just-sp-bet',
                          },{
                            value   : 'space-around',
                            title    : 'Space around',
                            className : 'icons-flex icon-just-sp-ar',
                          },{
                            value   : 'center',
                            title    : 'Center',
                            className : 'icons-flex icon-just-sp-cent',
                          }],
                },{
                  name      : 'Align',
                  property  : 'align-items',
                  type    : 'radio',
                  defaults  : 'center',
                  list    : [{
                            value   : 'flex-start',
                            title    : 'Start',
                            className : 'icons-flex icon-al-start',
                          },{
                            value   : 'flex-end',
                            title    : 'End',
                            className : 'icons-flex icon-al-end',
                          },{
                            value   : 'stretch',
                            title    : 'Stretch',
                            className : 'icons-flex icon-al-str',
                          },{
                            value   : 'center',
                            title    : 'Center',
                            className : 'icons-flex icon-al-center',
                          }],
                },{
                  name: 'Flex Children',
                  property: 'label-parent-flex',
                  type: 'integer',
                },{
                  name:     'Order',
                  property:   'order',
                  type:     'integer',
                  defaults :  0,
                  min: 0
                },{
                  name    : 'Flex',
                  property  : 'flex',
                  type    : 'composite',
                  properties  : [{
                          name:     'Grow',
                          property:   'flex-grow',
                          type:     'integer',
                          defaults :  0,
                          min: 0
                        },{
                          name:     'Shrink',
                          property:   'flex-shrink',
                          type:     'integer',
                          defaults :  0,
                          min: 0
                        },{
                          name:     'Basis',
                          property:   'flex-basis',
                          type:     'integer',
                          units:    ['px','%',''],
                          unit: '',
                          defaults :  'auto',
                        }],
                },{
                  name      : 'Align',
                  property  : 'align-self',
                  type      : 'radio',
                  defaults  : 'auto',
                  list    : [{
                            value   : 'auto',
                            name    : 'Auto',
                          },{
                            value   : 'flex-start',
                            title    : 'Start',
                            className : 'icons-flex icon-al-start',
                          },{
                            value   : 'flex-end',
                            title    : 'End',
                            className : 'icons-flex icon-al-end',
                          },{
                            value   : 'stretch',
                            title    : 'Stretch',
                            className : 'icons-flex icon-al-str',
                          },{
                            value   : 'center',
                            title    : 'Center',
                            className : 'icons-flex icon-al-center',
                          }],
                }]
              }
            ],
          },
        },
        
      canvas: {
        styles: [
          'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css',
        ],
        scripts: [
          '<?= base_url()?>assets/jquery/jquery.min.js',
          'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js',
        ]
      }
      });

      editor.I18n.addMessages({
        en: {
          styleManager: {
            properties: {
              'background-repeat': 'Repeat',
              'background-position': 'Position',
              'background-attachment': 'Attachment',
              'background-size': 'Size',
            }
          },
        }
      });


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
            document.getElementById('html').value = html;
            document.getElementById('css').value = css;
            document.getElementById('js').value = js;
            const getAllComponents = (model, result = []) => {
              result.push(model);
              model.components().each(mod => getAllComponents(mod, result))
              return result;
            }
            const all = getAllComponents(editor.DomComponents.getWrapper());
            console.log(all);
            // pop --------------------------------------------//
            document.getElementById("savepages").submit();
          }
        }
      ]
    });


      var pn = editor.Panels;
      var modal = editor.Modal;
      var cmdm = editor.Commands;
      cmdm.add('canvas-clear', function() {
        if(confirm('Areeee you sure to clean the canvas?')) {
          var comps = editor.DomComponents.clear();
          setTimeout(function(){ localStorage.clear()}, 0)
        }
      });
      cmdm.add('set-device-desktop', {
        run: function(ed) { ed.setDevice('Desktop') },
        stop: function() {},
      });
      cmdm.add('set-device-tablet', {
        run: function(ed) { ed.setDevice('Tablet') },
        stop: function() {},
      });
      cmdm.add('set-device-mobile', {
        run: function(ed) { ed.setDevice('Mobile portrait') },
        stop: function() {},
      });



      // Add info command
      var mdlClass = 'gjs-mdl-dialog-sm';
      var infoContainer = document.getElementById('info-panel');
      cmdm.add('open-info', function() {
        var mdlDialog = document.querySelector('.gjs-mdl-dialog');
        mdlDialog.className += ' ' + mdlClass;
        infoContainer.style.display = 'block';
        modal.setTitle('About this demo');
        modal.setContent(infoContainer);
        modal.open();
        modal.getModel().once('change:open', function() {
          mdlDialog.className = mdlDialog.className.replace(mdlClass, '');
        })
      });
      pn.addButton('options', {
        id: 'open-info',
        className: 'fa fa-question-circle',
        command: function() { editor.runCommand('open-info') },
        attributes: {
          'title': 'About',
          'data-tooltip-pos': 'bottom',
        },
      });


      // Simple warn notifier
      var origWarn = console.warn;
      toastr.options = {
        closeButton: true,
        preventDuplicates: true,
        showDuration: 250,
        hideDuration: 150
      };
      console.warn = function (msg) {
        if (msg.indexOf('[undefined]') == -1) {
          toastr.warning(msg);
        }
        origWarn(msg);
      };


      // Add and beautify tooltips
      [['sw-visibility', 'Show Borders'], ['preview', 'Preview'], ['fullscreen', 'Fullscreen'],
       ['export-template', 'Export'], ['undo', 'Undo'], ['redo', 'Redo'],
       ['gjs-open-import-webpage', 'Import'], ['canvas-clear', 'Clear canvas']]
      .forEach(function(item) {
        pn.getButton('options', item[0]).set('attributes', {title: item[1], 'data-tooltip-pos': 'bottom'});
      });
      [['open-sm', 'Style Manager'], ['open-layers', 'Layers'], ['open-blocks', 'Blocks']]
      .forEach(function(item) {
        pn.getButton('views', item[0]).set('attributes', {title: item[1], 'data-tooltip-pos': 'bottom'});
      });
      var titles = document.querySelectorAll('*[title]');

      for (var i = 0; i < titles.length; i++) {
        var el = titles[i];
        var title = el.getAttribute('title');
        title = title ? title.trim(): '';
        if(!title)
          break;
        el.setAttribute('data-tooltip', title);
        el.setAttribute('title', '');
      }

      // Show borders by default
      pn.getButton('options', 'sw-visibility').set('active', 1);


      // Store and load events
      editor.on('storage:load', function(e) { console.log('Loaded ', e) });
      editor.on('storage:store', function(e) { console.log('Stored ', e) });


      // Do stuff on load
      editor.on('load', function() {
        var $ = grapesjs.$;

        // Show logo with the version
        var logoCont = document.querySelector('.gjs-logo-cont');
        document.querySelector('.gjs-logo-version').innerHTML = 'v' + grapesjs.version;
        var logoPanel = document.querySelector('.gjs-pn-commands');
        logoPanel.appendChild(logoCont);


        // Load and show settings and style manager
        var openTmBtn = pn.getButton('views', 'open-tm');
        openTmBtn && openTmBtn.set('active', 1);
        var openSm = pn.getButton('views', 'open-sm');
        openSm && openSm.set('active', 1);

        // Add Settings Sector
        var traitsSector = $('<div class="gjs-sm-sector no-select">'+
          '<div class="gjs-sm-title"><span class="icon-settings fa fa-cog"></span> Settings</div>' +
          '<div class="gjs-sm-properties" style="display: none;"></div></div>');
        var traitsProps = traitsSector.find('.gjs-sm-properties');
        traitsProps.append($('.gjs-trt-traits'));
        $('.gjs-sm-sectors').before(traitsSector);
        traitsSector.find('.gjs-sm-title').on('click', function(){
          var traitStyle = traitsProps.get(0).style;
          var hidden = traitStyle.display == 'none';
          if (hidden) {
            traitStyle.display = 'block';
          } else {
            traitStyle.display = 'none';
          }
        });

        // Open block manager
        var openBlocksBtn = editor.Panels.getButton('views', 'open-blocks');
        openBlocksBtn && openBlocksBtn.set('active', 1);

        // Move Ad
        $('#gjs').append($('.ad-cont'));
      });


         editor.BlockManager.add('contentTemp', {
            label: 'Content',
            attributes: { class: 'fa fa-square' },
            content: `
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <span></span><p>{{content}}</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <span></span><p>{{artikel}}</p>
                </div>
              </div>
            </div>
          `
          })


    </script>


  
</body>
</html>