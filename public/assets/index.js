window.addEventListener("DOMContentLoaded", async () => {
    let employees = await getEmployees();
    loadEmployeeTable(employees);
  });
  
  async function getEmployees() {
    console.log("response");
      const response = await fetch("employee/get");
      
      console.log(response);
      const data = await response.json();
      console.log(data);
    return data;
  }
  
  function loadEmployeeTable(employees) {
    $("#jsGrid").jsGrid({
      width: "100%",
      height: "700px", //800max
  
      inserting: true,
      sorting: true,
      paging: true,
  
      data: employees,
  
      rowDoubleClick: function (args) {
        const id = args["item"].id;
        console.log(id)
        // window.location.assign(`employee`);
        window.location.assign(`employee/showEmployee/${id}`);
      },
  
      fields: [
        {
          name: "name",
          type: "text",
          width: 150,
          title: "Name",
          validate: "required",
        },
        { name: "email", type: "text", width: 200, title: "Email" },
        { name: "age", type: "text", width: 50, title: "Age" },
        { name: "streetAddress", type: "text", title: "Street No." },
        { name: "city", type: "text", title: "City" },
        { name: "state", type: "text", width: 50, title: "State" },
        { name: "postalCode", type: "number", title: "Postal Code" },
        { name: "phoneNumber", type: "number", title: "Phone Number" },
        {
          type: "control",
          editButton: false,
          delOptions: { url: "/controller/deleteRecordAction" },
        },
      ],
      controller: {
        deleteItem: function name(item) {
          return $.ajax({
            type: "DELETE",
            url: "./library/employeeController.php?deleteEmployee",
            data: item,
          });
        },
  
        insertItem: function name(item) {
          return $.ajax({
            type: "POST",
            url: "./library/employeeController.php?addEmployee",
            data: item,
          });
        },
      },
    });
  }
  