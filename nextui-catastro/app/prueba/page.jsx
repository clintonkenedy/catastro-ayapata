'use client';
import React, { useEffect, useState } from 'react';
import {
  Table,
  TableHeader,
  TableColumn,
  TableBody,
  TableRow,
  TableCell,
  getKeyValue,
} from '@nextui-org/react';
import RoleService from '@/hooks/RoleService';
// async function data() {
//   const { records, totalRecords, recordCount, totalPages } =
//     await RoleService.getData();
//   console.log(records);
// }
// data();

export default function Pruebas() {
  const [records, setRecords] = useState([]);
  useEffect(() => {
    async function fetchData() {
      const { records, totalRecords, recordCount, totalPages } =
        await RoleService.getData();
      setRecords(records);
      console.log(records);
    }
    fetchData();
  }, []);

  return (
    <section>
      <div className='container'>
        <Table aria-label='Example static collection table'>
          <TableHeader>
            <TableColumn key='id_ubi_geo'>id_ubi_geo</TableColumn>
            <TableColumn key='nomb_ubi_geo'>nomb_ubi_geo</TableColumn>
            <TableColumn key='cuc_desde'>cuc_desde</TableColumn>
            <TableColumn key='cuc_hasta'>cuc_hasta</TableColumn>
          </TableHeader>
          <TableBody items={records ?? []}>
            {(item) => (
              <TableRow key={item?.id_ubi_geo}>
                {(columnKey) => (
                  <TableCell>{getKeyValue(item, columnKey)}</TableCell>
                )}
              </TableRow>
            )}
          </TableBody>
        </Table>
      </div>
    </section>
  );
}
