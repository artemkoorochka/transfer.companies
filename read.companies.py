from pyexcel_xls import get_data
file = "companies.xlsx"
data = get_data(file)
import json
with open('companies.json', 'w') as file:
    json.dump(data, file)