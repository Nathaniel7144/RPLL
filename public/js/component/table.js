class Table {
    embed(id, table) {
        $(id).append(table);
    }

    create(data) {
        let table =
            `
            <table class="table table-hover table-responsive">
                <thead>
                <tr class='table-primary'>
                    ${this.getTableHead(data.head)}
                </tr>
                </thead>
                <tbody>
                ${this.getTableContents(data.contents)}
                </tbody>
            </table>
        `;
        return table
    }

    getTableHead(tableHeads) {
        let htmlTableHead = '';
        for (let head of tableHeads) {
            htmlTableHead += `<th>${head}</th>`;
        }
        return htmlTableHead;
    }

    getTableContents(contents) {
        let htmlContents = '';
        for (let row of contents) {
            htmlContents += '<tr>';
            for (let attr of row) {
                htmlContents += `<td>${attr}</td>`;
            }
            htmlContents += '</tr>';
        }
        return htmlContents;
    }
}