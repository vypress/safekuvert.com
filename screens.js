/*Open image in a separate window*/
function openImage(imgSrc, cx, cy)
{
	var window_width = cx+20;
	var window_height = cy+50;
	popupWin=window.open("","Image","toolbar=no, status=no, scrollbars=no, resizable=no, menubar=no, location=no, directories=no, width=" +window_width+ ", height=" +window_height, false);								   
	popupWin.document.open();
	popupWin.document.write("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><title>Screenshot</title><link href=\"/main.css\" type=\"text/css\" rel=\"stylesheet\" /></head><body style=\"margin:10px; text-align:center;\"><img src=\"/screens/" + imgSrc + "\" width=\"" +cx+ "\" height=\"" +cy+ "\" /><p style=\"margin:10px; clear:both;\"><a href=\"javascript:window.close();\">Close this window</a></p></body></html>");
	popupWin.document.close();
}