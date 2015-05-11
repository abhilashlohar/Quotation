<div id="content">
     <h3>Hello, this is a H3 tag</h3>
	 <img src="<?php echo $webroot_path; ?>as/Download-icon.png" />

    <p>a pararaph</p>
</div>
<div id="editor"></div>
<button id="cmd">generate PDF</button>









<script src="<?php echo $webroot_path; ?>pdf/jspdf.debug.js"></script>
<script src="<?php echo $webroot_path; ?>pdf/jquery-1.8.3.min.js"></script>
<script src="<?php echo $webroot_path; ?>pdf/png.js"></script>
<script src="<?php echo $webroot_path; ?>pdf/zlib.js"></script>
<script src="<?php echo $webroot_path; ?>pdf/FileSaver.js"></script>
<script>
$(document).ready(function() {
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
});
</script>