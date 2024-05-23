'use client';
import PruebaService from '@/hooks/PruebaService';
import { useEffect, useState } from 'react';

export default function Testv1() {
  // const [records, setRecords] = useState('xd');
  const user = {
    nombre: 'clinton',
    apellido: 'kenedy',
  };
  let apellido = 'ventura';
  // const { data } = PruebaService.getData();
  // console.log('object', data?.records);
  // console.log('xd', records);
  // useEffect(() => {
  //   // setRecords(data?.records);
  //   // console.log('object', records);
  //   console.log('xd');
  // }, []);

  return (
    <h1>
      testv{user.nombre}-{apellido}
    </h1>
  );
}
