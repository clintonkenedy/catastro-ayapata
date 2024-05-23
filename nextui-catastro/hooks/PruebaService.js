import api from '@/lib/axios';
import useSWR from 'swr';
const fetcher = (url) => api.get(url).then((res) => res.data);
class PruebaService {
  static getData() {
    // return (await api.get("api/tfubigeo/")).data;
    // return api.get('api/tfubigeo/').then((res) => res.data);
    return useSWR('api/tfubigeo/', fetcher);
  }
}

export default PruebaService;

// const fetcher = (url: string) => api.get(url).then((res) => res.data);

// const PruebaService {
//     function getData() {
//         // const { data, error } =
//         // const { data } = useSWR('api/tfubigeo/', fetcher);
//         return useSWR('api/tfubigeo/', fetcher);
//         // ...
//     }
// }

// export function getData() {
//     // const { data, error } =
//     // const { data } = useSWR('api/tfubigeo/', fetcher);
//     return useSWR('api/tfubigeo/', fetcher);
//     // ...
// }
