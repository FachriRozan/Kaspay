<x-admin-layout>
    <style type="text/css">
    
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        input{
            border: none;
        }
        
        
        .adddata{
            margin-bottom: 20px;
        }
            </style>
    <div class="adddata">
        <button type="button" onclick="addRow()"><i class="bi bi-book-fill"></i> Tambah Data</button>
      </div>
      <div>
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Tujuan Pengeluaran</th>
              <th>Jumlah Pengeluaran</th>
              <th>Total Kas</th>
              <th>Sisa uang Kas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td>1</td>
              <td><input type="text" name="tanggal"></td>
              <td><input type="text" name="tujuan"></td>
              <td><input type="text" name="jumlah"></td>
              <td><input type="text" name="totalkas"></td>
              <td><input type="text" name="sisa"></td>
              <td>
                <button type="button"><i class="bi bi-pencil-square"></i></button>
                <button type="button"><i class="bi bi-trash3-fill"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
    
      </div>
    
      <script>
        function addRow(button) {
          var tableBody = document.getElementById("table-body");
          var newRow = tableBody.insertRow(-1);
          var cells = [
            newRow.insertCell(0),
            newRow.insertCell(1),
            newRow.insertCell(2),
            newRow.insertCell(3),
            newRow.insertCell(4),
            newRow.insertCell(5),
            newRow.insertCell(6)
    
          ];
    
          cells.forEach(function (cell, index) {
            if (index === 0) {
              cell.textContent = tableBody.rows.length;
            } else {
              var textInput = document.createElement("input");
              textInput.setAttribute("type", "text");
              textInput.setAttribute("tanggal", cell.cellIndex === 1 ? "tujuan" : cell.cellIndex === 2 ? "jumlah" : "totalkas");
              cell.appendChild(textInput);
            }
          });
    
        }
    
        function updateRowNumbers() {
          var tableBody = document.getElementById("table-body");
          for (var i = 0; i < tableBody.rows.length; i++) {
            tableBody.rows[i].cells[0].textContent = i + 1;
          }
        }
      </script>
    </body>
</x-admin-layout>