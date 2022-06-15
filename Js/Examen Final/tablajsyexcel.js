onclick = "exportData()";

var mainObj = [
	{
		name: "Kapil",
		age: 21,
		status: "Active",
	},
	{
		name: "John",
		age: 28,
		status: "Inactive",
	},
	{
		name: "Deos",
		age: 18,
		status: "Active",
	},
];
var k = "<tbody>";
for (i = 0; i < mainObj.length; i++) {
	k += "<tr>";
	k += "<td>" + mainObj[i].name + "</td>";
	k += "<td>" + mainObj[i].age + "</td>";
	k += "<td>" + mainObj[i].status + "</td>";
	k += "</tr>";
}
k += "</tbody>";
document.getElementById("tableData").innerHTML = k;

function exportData() {
	/* Get the HTML data using Element by Id */
	var table = document.getElementById("tblStocks");

	/* Declaring array variable */
	var rows = [];

	//iterate through rows of table
	for (var i = 0, row; (row = table.rows[i]); i++) {
		//rows would be accessed using the "row" variable assigned in the for loop
		//Get each cell value/column from the row
		column1 = row.cells[0].innerText;
		column2 = row.cells[1].innerText;
		column3 = row.cells[2].innerText;
		/* add a new records in the array */
		rows.push([column1, column2, column3]);
	}
	csvContent = "data:text/csv;charset=utf-8,";
	/* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
	rows.forEach(function (rowArray) {
		row = rowArray.join(",");
		csvContent += row + "\r\n";
	});

	/* create a hidden <a> DOM node and set its download attribute */
	var encodedUri = encodeURI(csvContent);
	var link = document.createElement("a");
	link.setAttribute("href", encodedUri);
	link.setAttribute("download", "Stock_Price_Report.csv");
	document.body.appendChild(link);
	/* download the data file named "Stock_Price_Report.csv" */
	link.click();
}
