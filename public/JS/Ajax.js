function AjaxRequest(url, type, data) {
  $.ajax({
    url: url,
    type: type,
    data: data,
    success : function(result){
      console.log(result);
      if (document.getElementById("Slide-"+ data.id) !== null) {
        document.getElementById("Slide-"+ data.id).innerHTML = "";
        document.getElementById("Slide-"+ data.id).remove();
      }
    },
    error : function(result){
      console.log(result);
    }
  });
}
