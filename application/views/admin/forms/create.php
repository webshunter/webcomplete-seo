<br>    
<div class="notika-email-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="email-statis-inner notika-shadow">
                <h1 class="m-0 text-dark">Form</h1>
                <p>buat form anda.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br> 
<div class="notika-email-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="email-statis-inner notika-shadow">
                    <div id="code">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    var pp = div();

    pp.child(
        h2().text('paragrap')
    )

    var cc = [];

    var content;

    function simpan(el){
        if (cc.length > 0) {
            var mmp = cc.map(function(elm){

                var el = '<tr>';

                Object.keys(elm).forEach(function(odb){
                    el += '<td>';
                    el += elm[odb];
                    el += '</td>';
                })

                el += '</tr>';

                return el;

            }).join('');

            mmp = '<table class="table">'+mmp+'</table>';

            content.el.innerHTML = mmp;

        }
    }

    pp.child(
        div().class('row')
        .child(
            div().class('col-sm-8').load(function(el){
                content = el;
            })
        )
        .child(
            div().class('col-sm-4')
            .child(
                el('form')
                .submit(function(e){

                    cc.push(e);

                    simpan(cc);

                })
                .child(
                    input().class('form-control').mb('10px').hold('title').name('title')
                )
                .child(
                    input().class('form-control').mb('10px').hold('name').name('name')
                )
                .child(
                    el('select').class('form-control').name('type')
                    .child(
                        option().text('text')
                    )
                    .child(
                        option().text('number')
                    )
                    .child(
                        option().text('password')
                    )
                    .child(
                        option().text('username')
                    )
                    .child(
                        option().text('select')
                    )
                    .child(
                        option().text('textarea')
                    )
                    .child(
                        option().text('input')
                    )
                    .mb('10px')
                )
                .child(
                    input().class('form-control').mb('10px').hold('table').name('table')
                )
                .child(
                    input().class('form-control').mb('10px').hold('data').name('data')
                )
                .child(
                    input().class('form-control').mb('10px').hold('key').name('key')
                )
                .child(
                    input().class('form-control').mb('10px').hold('manual list').name('manual_list')
                )
                .child(
                    btn().type('submit').class('btn btn-primary').mb('10px').text('submit')
                )
                .child(
                    btn().type('button').class('btn btn-primary').mb('10px').ml('10px').text('simpan')
                )
            )
        )
    )

    



    domp('code', pp);

</script>