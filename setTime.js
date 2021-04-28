function clickeven(){
  // Set the date we're counting down to
  var d = new Date();
    var setDate = {
      year: d.getFullYear(),
      mount: d.getMonth(),
      date: d.getDate(),
      hours: d.getHours(),
      minutes: d.getMinutes(),
      seconds: d.getSeconds(),
    };

  var setTime = (setMinutes) => {
    return new Date(
      setDate.year,
      setDate.mount,
      setDate.date,
      parseInt(timestart[0]),
      parseInt(timestart[1]) + setMinutes,
      parseInt(timestart[2])
    )
  };

  
  let setminutes = parseInt(document.getElementById("setminutes").value);
  let timestartArr = document.getElementById("timestart").value
  let timenow = setDate.hours+":"+setDate.minutes+":"+setDate.seconds;
  let timestart = timestartArr.split(":")
  let timeend = setTime(setminutes).getHours()+":"+setTime(setminutes).getMinutes()+":"+setTime(setminutes).getSeconds();
  let timecount = setTime(setminutes).getTime(); // time end save in data base
  document.getElementById("timenow").value = timenow
  document.getElementById("timeend").value = timeend
  document.getElementById("timecount").value = timecount
};




