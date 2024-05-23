
import api from "@/lib/axios";
// const fetcher = url => api.get(url).then(res => res.data)
class RoleService {

    static async getData() {
        return (await api.get("api/tfubigeo/")).data;
        // return api.get("api/tfubigeo/").then(res => res.data)
    }
}

export default RoleService;
