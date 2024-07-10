up:
	docker-compose up -d

down:
	docker-compose down

test:
	k6 run --vus 50 k6-swoole.js

status:
	docker stats