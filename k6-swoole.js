import { check } from "k6";
import http from "k6/http";

export const options = {
    iterations: 2000,
};

export default function () {
    const params = {
        headers: {
            "Content-Type": "application/json",
        },
    };

    const response = http.get("http://localhost:8080", [], params);

    check(response, {
        "response code was 200": (res) => res.status == 200,
    })
}